(function() {
  'use strict';

  var videos = document.querySelectorAll('.youtube');
  var videosLen = videos.length;

  if (videosLen === 0) {
    return;
  }

  function loadVideo(video, videoId) {
    var iframe = document.createElement('iframe');

    iframe.classList.add('embed-responsive-item');
    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?rel=0&autoplay=1');
    iframe.setAttribute('width', '760');
    iframe.setAttribute('height', '570');
    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');

    video.innerHTML = '';
    video.appendChild(iframe);
  }

  for (var i = 0; i < videosLen; i++) {
    var video = videos[i];
    var id = video.getAttribute('data-embed');

    if (!id) {
      return;
    }

    video.addEventListener('click', loadVideo.bind(null, video, id));
  }
})();
