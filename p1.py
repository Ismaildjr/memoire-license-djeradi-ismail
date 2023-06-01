#!/usr/bin/env python3
# -*- coding: utf-8 -*-

# MIT License
#
# Copyright (c) 2019 Iván de Paz Centeno
#
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
#
# The above copyright notice and this permission notice shall be included in all
# copies or substantial portions of the Software.
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
# SOFTWARE.

import cv2
from mtcnn import MTCNN

# Create a VideoCapture object to capture video from the webcam
cap = cv2.VideoCapture(0)  # 0 indicates the default webcam (usually built-in)

# Check if the webcam opened successfully
if not cap.isOpened():
    print("Failed to open webcam")
    exit()

# Create an MTCNN detector
detector = MTCNN()

while True:
    # Capture a frame from the webcam
    ret, frame = cap.read()

    # Check if frame was captured successfully
    if not ret:
        print("Failed to capture frame from webcam")
        break

    # Convert the frame from BGR to RGB
    image = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)

    # Detect faces in the frame using MTCNN
    result = detector.detect_faces(image)

    # Result is an array with all the bounding boxes detected. We know that for webcam video there can be multiple faces.
    for r in result:
        bounding_box = r['box']
        keypoints = r['keypoints']

        # Draw bounding box and facial landmarks on the frame
        cv2.rectangle(frame,
                      (bounding_box[0], bounding_box[1]),
                      (bounding_box[0]+bounding_box[2], bounding_box[1] + bounding_box[3]),
                      (0,155,255),
                      2)

        cv2.circle(frame,(keypoints['left_eye']), 2, (0,155,255), 2)
        cv2.circle(frame,(keypoints['right_eye']), 2, (0,155,255), 2)
        cv2.circle(frame,(keypoints['nose']), 2, (0,155,255), 2)
        cv2.circle(frame,(keypoints['mouth_left']), 2, (0,155,255), 2)
        cv2.circle(frame,(keypoints['mouth_right']), 2, (0,155,255), 2)

    # Display the frame with detected faces
    cv2.imshow("Webcam with Face Detection", frame)

    # Exit loop if 'q' key is pressed
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# Release the webcam and close all OpenCV windows
cap.release()
cv2.destroyAllWindows()
