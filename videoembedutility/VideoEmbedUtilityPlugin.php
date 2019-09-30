<?php

	namespace Craft;

	class VideoEmbedUtilityPlugin extends BasePlugin {

		public function addTwigExtension() {
			Craft::import('plugins.videoembedutility.twigextensions.VideoEmbedUtilityTwigExtension');
			return new VideoEmbedUtilityTwigExtension();
		}

		public function getName() {
			return Craft::t('Video Embed Utility');
		}

		public function getVersion() {
			return '1.0.1';
		}

		function getDeveloper() {
			return 'Staplegun Design, Inc.';
		}

		function getDeveloperUrl() {
			return 'https://github.com/rjhallsted/craft-video-embed-utility';
		}

	}
