wp.domReady(function () {
  wp.blocks.unregisterBlockType("core/list");
  wp.blocks.unregisterBlockType("core/code");
  wp.blocks.unregisterBlockType("core/details");
  wp.blocks.unregisterBlockType("core/preformatted");
  wp.blocks.unregisterBlockType("core/pullquote");
  wp.blocks.unregisterBlockType("core/table");
  wp.blocks.unregisterBlockType("core/verse");
  wp.blocks.unregisterBlockType("core/footnotes");

  wp.blocks.unregisterBlockType("core/gallery");
  wp.blocks.unregisterBlockType("core/audio");
  wp.blocks.unregisterBlockType("core/cover");
  wp.blocks.unregisterBlockType("core/file");
  wp.blocks.unregisterBlockType("core/video");
  wp.blocks.unregisterBlockType("core/media-text");

  wp.blocks.unregisterBlockType("core/more");
  wp.blocks.unregisterBlockType("core/spacer");
  wp.blocks.unregisterBlockType("core/separator");

  wp.blocks.unregisterBlockType("core/embed");
});
