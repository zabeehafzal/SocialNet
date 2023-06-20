var postId = 1;

        function addPost() {
            var postTitle = document.getElementById('pin-title').value;
            var postContent = document.getElementById('pin-content').value;
            var postImage = document.getElementById('pin-img').files[0];

            // Create a new post element
            var postElement = document.createElement('div');
            postElement.className = 'post';
            postElement.id = 'post-' + postId;
            postElement.innerHTML = `
                <h2>${postTitle}</h2>
                <p>${postContent}</p>
                <div id="pin-img">
                    <img src="${URL.createObjectURL(postImage)}" alt="Post Image" width="200">
                </div>
                <div id="pin-options">
                    <a href="#" onclick="likePost(${postId})">Like</a>
                    <a href="#" onclick="dislikePost(${postId})">Dislike</a>
                    <a href="#" onclick="toggleCommentInput(${postId})" id="comment-button-${postId}">Comment</a>
                    <a href="#" onclick="deletePost(${postId})">Delete</a>
                </div>
                <div>
                    <span id="like-count-${postId}">0</span> Likes |
                    <span id="dislike-count-${postId}">0</span> Dislikes
                </div>
                <div id="comment-display-${postId}">
                    <ul class="comment-list"></ul>
                </div>
                <textarea class="comment-input" id="comment-input-${postId}" rows="2"></textarea>
            `;

            // Append the new post to the box
            var box = document.querySelector('.box');
            box.appendChild(postElement);

            // Reset the form fields
            document.getElementById('pin-title').value = '';
            document.getElementById('pin-content').value = '';
            document.getElementById('pin-img').value = '';

            postId++;
        }

        function likePost(postId) {
            var countElement = document.getElementById('like-count-' + postId);
            var count = parseInt(countElement.textContent);
            count++;
            countElement.textContent = count;
        }

        function dislikePost(postId) {
            var countElement = document.getElementById('dislike-count-' + postId);
            var count = parseInt(countElement.textContent);
            count++;
            countElement.textContent = count;
        }

        function toggleCommentInput(postId) {
            var commentInput = document.getElementById('comment-input-' + postId);
            var commentButton = document.getElementById('comment-button-' + postId);

            if (commentInput.style.display === 'none') {
                commentInput.style.display = 'block';
                commentButton.textContent = 'Save';
            } else {
                var commentContent = commentInput.value;

                // Update the UI with the comment
                var commentDisplay = document.getElementById('comment-display-' + postId);
                var commentItem = document.createElement('li');
                commentItem.textContent = commentContent;
                commentDisplay.appendChild(commentItem);

                commentInput.style.display = 'none';
                commentButton.textContent = 'Comment';
                commentInput.value = '';
            }
        }

        function deletePost(postId) {
            var postElement = document.getElementById('post-' + postId);
            postElement.remove();
        }