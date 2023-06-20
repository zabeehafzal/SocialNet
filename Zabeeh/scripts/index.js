function incrementCount(type, postId) {
    var countElement = document.getElementById(type + '-count-' + postId);
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