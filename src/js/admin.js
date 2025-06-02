// フルスクリーンエディタを初期で無効化
window.addEventListener('load', function () {
  if (
    typeof wp !== 'undefined' &&
    wp.data &&
    wp.data.select('core/edit-post') &&
    wp.data.dispatch('core/edit-post')
  ) {
    const isFullscreen = wp.data
      .select('core/edit-post')
      .isFeatureActive('fullscreenMode');
    if (isFullscreen) {
      wp.data.dispatch('core/edit-post').toggleFeature('fullscreenMode');
    }
  }
});
