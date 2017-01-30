// --------------------------------------------------------------------------
//
//   Lightbox
//
// --------------------------------------------------------------------------

$('.galleryRow-block-link').featherlight({
  afterContent: function () {
    $('.featherlight-content').fitVids();
  }
});
