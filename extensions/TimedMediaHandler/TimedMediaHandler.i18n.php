<?php
/**
 * Internationalisation file for extension OggPlayer.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'timedmedia-desc'             => 'Handler for audio, video and timed text, with format support for WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio'  => 'Ogg $1 sound file, $2',
	'timedmedia-ogg-short-video'      => 'Ogg $1 video file, $2',
	'timedmedia-ogg-short-general'    => 'Ogg $1 media file, $2',
	'timedmedia-ogg-long-audio'       => 'Ogg $1 sound file, length $2, $3',
	'timedmedia-ogg-long-video'       => 'Ogg $1 video file, length $2, $4 × $5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multiplexed audio/video file, $1, length $2, $4 × $5 pixels, $3 overall',
	'timedmedia-ogg-long-general'     => 'Ogg media file, length $2, $3',
	'timedmedia-ogg-long-error'       => 'Invalid Ogg file: $1',

	'timedmedia-webm-short-video' => 'WebM $1 video file, $2',
	'timedmedia-webm-long-video' => 'WebM audio/video file, $1, length $2, $4 × $5 pixels, $3 overall',
	'timedmedia-flac-short-audio' => 'FLAC audio file, $1',
	'timedmedia-flac-long-audio' => 'FLAC audio file, length $1, $2 overall',

	'timedmedia-wav-short-audio' => 'WAV audio file, $1',
	'timedmedia-wav-long-audio' => 'WAV audio file, length $1, $2 overall',
	'timedmedia-wav-pcm-required' => 'You can only upload PCM (Pulse Code Modulation) WAV.',

	'timedmedia-mp4-short-video' => 'MP4 $1 video file, $2',
	'timedmedia-mp4-long-video' => 'MP4 audio/video file, $1, length $2, $4 × $5 pixels, $3 overall',

	'timedmedia-no-player-js' => 'Sorry, your browser either has JavaScript disabled or does not have any supported player.<br />
You can <a href="$1">download the clip</a> or <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">download a player</a> to play the clip in your browser.',

	'timedmedia-more'             => 'More…',
	'timedmedia-dismiss'          => 'Close',
	'timedmedia-download'         => 'Download file',
	'timedmedia-play-media'       => 'Play media',
	'timedmedia-desc-link'        => 'About this file',
	'timedmedia-oggThumb-version' => 'OggHandler requires oggThumb version $1 or later.',
	'timedmedia-oggThumb-failed'  => 'oggThumb failed to create the thumbnail.',

	// Transcode status table:

	'timedmedia-status-header' => 'Transcode status',
	'timedmedia-update-status' => 'Update transcode status',
	'timedmedia-status'        => 'Status',
	'timedmedia-status-unknown' => 'Unknown status',
	'timedmedia-transcodeinfo' => 'Transcode derivative description',
	'timedmedia-actions' => 'Actions',
	'timedmedia-direct-link' => 'Download derivative',
	'timedmedia-not-ready' => 'Not ready',
	'timedmedia-completed-on' => 'Completed transcode $1',
	'timedmedia-error-on' => 'Error in transcode on $1',
	'timedmedia-started-transcode' => 'Transcode started $1 ago. $2',
	'timedmedia-percent-done' => 'About $1% done',
	'timedmedia-in-job-queue' => 'Added to Job queue $1 ago',
	'timedmedia-unknown-target-size'=> 'Unknown target size, $1 encoded',
	'timedmedia-days' => '{{PLURAL:$1|1 day|$1 days}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hour|$1 hours}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minute|$1 minutes}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 second|$1 seconds}}',
	'timedmedia-reset' => 'Reset transcode',
	'timedmedia-reset-confirm' => 'Resetting this transcode will remove any existing file (if present), and it will re-add the transcode to the job queue. It will take some time to re-transcode.<br /><br />
Are you sure you want to proceed?',
	'timedmedia-reset-error' => 'Error in resetting transcode job.',

	// Original uploaded asset
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 source',
	'timedmedia-source-file-desc' => 'Original $1 file, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Original $1 file ($2)',

	'timedmedia-derivative-160p.ogv' => 'Ogg 160P',
	'timedmedia-derivative-desc-160p.ogv' => 'Low bandwidth Ogg video (160P)',

	'timedmedia-derivative-360p.ogv' => 'Ogg 360P',
	'timedmedia-derivative-desc-360p.ogv' => 'Web streamable Ogg video (360P)',

	'timedmedia-derivative-480p.ogv' => 'Ogg 480P',
	'timedmedia-derivative-desc-480p.ogv' => 'Web streamable Ogg video (480P)',

	'timedmedia-derivative-720p.ogv' => 'Ogg 720P',
	'timedmedia-derivative-desc-720p.ogv' => 'High quality downloadable Ogg video (720P)',

	// WebM profiles:
	'timedmedia-derivative-160p.webm' => 'WebM 160P',
	'timedmedia-derivative-desc-160p.webm' => 'Web streamable WebM (160P)',
	'timedmedia-derivative-360p.webm' => 'WebM 360P',
	'timedmedia-derivative-desc-360p.webm' => 'Web streamable WebM (360P)',
	'timedmedia-derivative-480p.webm' => 'WebM 480P',
	'timedmedia-derivative-desc-480p.webm' => 'Web streamable WebM (480P)',
	'timedmedia-derivative-720p.webm' => 'WebM 720P',
	'timedmedia-derivative-desc-720p.webm' => 'High quality downloadable WebM (720P)',

	// h264 profiles
	'timedmedia-derivative-320p.mp4' => 'H264 320P',
	'timedmedia-derivative-desc-320p.mp4' => 'Device-friendly MP4 (320P)',

	'timedmedia-derivative-480p.mp4' => 'H264 480P',
	'timedmedia-derivative-desc-480p.mp4' => 'Web streamable MP4 (480P)',

	'timedmedia-derivative-720p.mp4' => 'H264 720P',
	'timedmedia-derivative-desc-720p.mp4' => 'HD quality MP4 (720P)',

	//Audio
	'timedmedia-derivative-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-desc-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-opus' => 'Opus',
	'timedmedia-derivative-desc-opus' => 'Opus',
	'timedmedia-derivative-mp3' => 'MP3',
	'timedmedia-derivative-desc-mp3' => 'MP3',
	'timedmedia-derivative-m4a' => 'AAC',
	'timedmedia-derivative-desc-m4a' => 'AAC',

	// Timed text page
	'timedmedia-subtitle-new' => 'Create new translation or edit existing',
	'timedmedia-subtitle-new-desc' => "Select language and press the '''{{int:Timedmedia-subtitle-new-go}}''' button",
	'timedmedia-subtitle-new-go' => 'Go',

	'timedmedia-subtitle-language' => '$1 ($2) subtitles',
	'timedmedia-subtitle-no-video' => 'There is no video associated with the current subtitle page.',
	'timedmedia-subtitle-no-subtitles' => 'There are currently no subtitles in $1 for this video, you can [{{fullurl:{{FULLPAGENAME}}|action=edit}} edit this page] to add them.',

	'timedmedia-subtitle-remote' => 'Timed text for this file is hosted on $1',
	'timedmedia-subtitle-remote-link' => 'You can [$1 view the description page] for this file on $2',

	//Special:TimedMediaHandler
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg video|$1 Ogg videos}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM video|$1 WebM videos}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcode|$1 transcodes}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 running transcode|$1 running transcodes}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 queued transcode|$1 queued transcodes}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 failed transcode|$1 failed transcodes}}',
	'timedmedia-file' => 'File',

	'right-transcode-reset' => 'Reset failed or transcoded videos so they are inserted into the job queue again',
	'right-transcode-status' => 'View [[Special:TimedMediaHandler|information about the current transcode activity]]',
	'action-transcode-status' => 'view the current transcoding status'
);

/** Message documentation (Message documentation)
 * @author Aotake
 * @author BrokenArrow
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Jon Harald Søby
 * @author Meno25
 * @author Minh Nguyen
 * @author Mormegil
 * @author Purodha
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 * @author Umherirrender
 * @author 아라
 */
$messages['qqq'] = array(
	'timedmedia-desc' => '{{desc|name=Timed Media Handler|url=http://www.mediawiki.org/wiki/Extension:TimedMediaHandler}}',
	'timedmedia-ogg-short-audio' => 'File details for Ogg sound (audio) files, short version.
Parameters:
* $1 - stream type name. Any one of the following: Vorbis, Speex, FLAC
* $2 - duration of the sound/audio (localized) - e.g. 1m34s
{{Related|Timedmedia-ogg-short}}',
	'timedmedia-ogg-short-video' => 'File details for Ogg video files, short version.
Parameters:
* $1 - stream type name: Theora
* $2 - duration of the video (localized) - e.g. 1m34s
{{Related|Timedmedia-ogg-short}}',
	'timedmedia-ogg-short-general' => 'File details for generic (non-audio, non-video) Ogg files, short version.
Parameters:
* $1 - stream type name
* $2 - duration of the media (localized) - e.g. 1m34s
{{Related|Timedmedia-ogg-short}}',
	'timedmedia-ogg-long-audio' => 'File details for Ogg sound (audio) files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - stream type name. Any one of the following: Vorbis, Speex, FLAC
* $2 - duration of the sound (localized) - e.g. 1m34s
* $3 - bit-rate of the sound (localized) - e.g. 97kbps
{{Related|Timedmedia-ogg-long}}',
	'timedmedia-ogg-long-video' => 'File details for Ogg video files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - stream type name: Theora
* $2 - duration of the video (localized) - e.g. 1m34s
* $3 - bit-rate of the video (localized) - e.g. 97kbps
* $4 - width of the video (in pixels)
* $5 - height of the video (in pixels)
{{Related|Timedmedia-ogg-long}}',
	'timedmedia-ogg-long-multiplexed' => '{{doc-important|Start with a lowercase letter, unless the first word is "Ogg".}}
File details for Ogg multiplexed audio/video files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - stream type names, slash-separated - e.g. Theora/Vorbis
* $2 - duration (localized) - e.g. 1m34s
* $3 - bit-rate (localized) - e.g. 97kbps
* $4 - width of the video (in pixels)
* $5 - height of the video (in pixels)
{{Related|Timedmedia-ogg-long}}',
	'timedmedia-ogg-long-general' => 'File details for Ogg generic (non-video, non-audio) files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - (Unused)
* $2 - duration (localized) - e.g. 1m34s
* $3 - bit-rate (localized) - e.g. 97kbps
{{Related|Timedmedia-ogg-long}}',
	'timedmedia-ogg-long-error' => 'Used as error message. Parameters:
* $1 - error message. e.g. File not found, invalid stream, etc.',
	'timedmedia-webm-short-video' => 'File details for WebM video files, short version.
Parameters:
* $1 - stream type names (slash separated) -  e.g. Vorbis/VP8
* $2 - duration of the video (localized) - e.g. 1m34s
See also:
* {{msg-mw|Timedmedia-webm-long-video}}',
	'timedmedia-webm-long-video' => 'File details for WebM multiplexed audio/video files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - stream type names (slash separated) - e.g. Vorbis/VP8
* $2 - duration (localized) - e.g. 1m34s
* $3 - bit-rate (localized) - e.g. 97kbps
* $4 - width of the video (in pixels)
* $5 - height of the video (in pixels)
See also:
* {{msg-mw|Timedmedia-webm-short-video}}',
	'timedmedia-flac-short-audio' => 'File details for FLAC audio files, short version.
Parameters:
* $1 - duration of the audio (localized) - e.g. 1m34s

Primarily used on [[Special:Search]] results pages, i.e.
 https://commons.wikimedia.org/w/index.php?title=Special%3ASearch&profile=advanced&search=What%27s+a+love+dart&fulltext=Search&ns6=1&profile=advanced

See also:
* {{msg-mw|Timedmedia-flac-long-audio}}
* {{msg-mw|Timedmedia-ogg-short-audio}}',
	'timedmedia-flac-long-audio' => 'File details for FLAC files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - duration (localized) - e.g. 1m34s
* $2 - bit-rate (localized) - e.g. 97kbps
See also:
* {{msg-mw|Timedmedia-flac-short-audio}}',
	'timedmedia-wav-short-audio' => 'File details for WAV audio files, short version.
Parameters:
* $1 - duration of the audio (localized) - e.g. 1m34s
See also:
* {{msg-mw|Timedmedia-wav-long-audio}}',
	'timedmedia-wav-long-audio' => 'File details for WAV files, long version.
Shown after the filename in the image description page.

Parameters:
* $1 - duration of the audio (localized) - e.g. 1m34s
* $2 - bit-rate (localized) - e.g. 97kbps
See also:
* {{msg-mw|Timedmedia-wav-short-audio}}',
	'timedmedia-wav-pcm-required' => 'Message shown at upload if user tries to upload a WAV file using a codec that is not PCM',
	'timedmedia-mp4-short-video' => 'File details for MP4 video files, short version.
Parameters:
* $1 - stream type names (slash separated) - e.g. AAC/h.264
* $2 - duration of the video (localized) - e.g. 1m34s
See also:
* {{msg-mw|Timedmedia-mp4-long-video}}',
	'timedmedia-mp4-long-video' => 'File details for MP4 multiplexed audio/video files, long version.

Shown after the filename in the image description page.

Parameters:
* $1 - stream type names (slash separated) - e.g. AAC/h.264
* $2 - duration (localized) - e.g. 1m34s
* $3 - bit-rate (localized) - e.g. 97kbps
* $4 - width of the video (in pixels)
* $5 - height of the video (in pixels)
See also:
* {{msg-mw|Timedmedia-mp4-short-video}}',
	'timedmedia-no-player-js' => 'Used as fallback text displayed for browsers without js and without video tag support.

Parameters:
* $1 - media source URL',
	'timedmedia-more' => 'Unused at this time.
{{Identical|More...}}',
	'timedmedia-dismiss' => 'Unused at this time.
{{Identical|Close}}',
	'timedmedia-download' => 'Used as tooltip for the Download button.
{{Identical|Download}}',
	'timedmedia-play-media' => 'Used as tooltip for the link.',
	'timedmedia-desc-link' => 'Unused at this time.
{{Identical|About this file}}',
	'timedmedia-oggThumb-version' => 'Used as error message when the specified option is invalid. Parameters:
* $1 - version number "0.9" (hard-coded)',
	'timedmedia-oggThumb-failed' => '{{doc-important|Do not translate <code>oggThumb</code>.}}
Used as error message when executing oggThumb.',
	'timedmedia-status-header' => 'Used as section heading.',
	'timedmedia-update-status' => 'Used as text for the link which is used to purge.',
	'timedmedia-status' => 'Used as column header.
{{Identical|Status}}',
	'timedmedia-status-unknown' => 'Used as status message on error.
{{Identical|Unknown status}}',
	'timedmedia-transcodeinfo' => 'A table column header for description of Transcode derivative',
	'timedmedia-actions' => 'Used as column header.
{{Identical|Action}}',
	'timedmedia-direct-link' => 'Used as column header.',
	'timedmedia-not-ready' => 'State of a given transcode job being not yet complete or not yet ready',
	'timedmedia-completed-on' => 'Completed transcode message. Parameters:
* $1 - the timestamp (time and date) that the transcode was completed',
	'timedmedia-error-on' => 'Parameters:
* $1 - timestamp',
	'timedmedia-started-transcode' => 'Status update for Transcodes. Parameters:
* $1 - time passed since transcoded started (e.g. "{{int:timedmedia-minutes|1}}{{int:comma-separator}}{{int:timedmedia-seconds|42}}"), uses the following messages:
** {{msg-mw|Timedmedia-days}}
** {{msg-mw|Timedmedia-hours}}
** {{msg-mw|Timedmedia-minutes}}
** {{msg-mw|Timedmedia-seconds}}
** {{msg-mw|Comma-separator}}
* $2 - percentage of transcode complete',
	'timedmedia-percent-done' => 'Commented out at this time.

Status update for Transcodes. Parameters:
* $1 - percentage of the file transcoded so far
See also:
* {{msg-mw|timedmedia-unknown-target-size}}',
	'timedmedia-in-job-queue' => 'Shown on the file description page in the {{msg-mw|timedmedia-status-header}} section.

Parameters:
* $1 - the time the media has been in the job queue (e.g. "{{int:timedmedia-minutes|1}}{{int:comma-separator}}{{int:timedmedia-seconds|42}}"), uses the following messages:
** {{msg-mw|Timedmedia-days}}
** {{msg-mw|Timedmedia-hours}}
** {{msg-mw|Timedmedia-minutes}}
** {{msg-mw|Timedmedia-seconds}}
** {{msg-mw|Comma-separator}}',
	'timedmedia-unknown-target-size' => 'Commented out at this time.

Status update for Transcodes. Parameters:
* $1 - the number of bytes of the file transcoded so far (localized)
See also:
* {{msg-mw|Timedmedia-percent-done}}',
	'timedmedia-days' => 'Used as the duration, as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-in-job-queue}}
* {{msg-mw|Timedmedia-started-transcode}}
Parameters:
* $1 - number of days
{{Related|Timedmedia-days}}
{{Identical|Day}}',
	'timedmedia-hours' => 'Used as the duration, as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-in-job-queue}}
* {{msg-mw|Timedmedia-started-transcode}}
Parameters:
* $1 - number of hours
{{Related|Timedmedia-days}}
{{Identical|Hour}}',
	'timedmedia-minutes' => 'Used as the duration, as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-in-job-queue}}
* {{msg-mw|Timedmedia-started-transcode}}
Parameters:
* $1 - minutes
{{Related|Timedmedia-days}}
{{Identical|Minute}}',
	'timedmedia-seconds' => 'Used as the duration, as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-in-job-queue}}
* {{msg-mw|Timedmedia-started-transcode}}
Parameters:
* $1 - number of seconds
{{Related|Timedmedia-days}}',
	'timedmedia-reset' => 'Used as action link text and as dialog title.

The contents of the dialog is {{msg-mw|Timedmedia-reset-confirm}}.',
	'timedmedia-reset-confirm' => 'Used as confirmation message in the dialog which has the title {{msg-mw|Timedmedia-reset}}.',
	'timedmedia-reset-error' => 'Used as generic error message.',
	'timedmedia-ogg' => '{{optional}}
Used as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-source-audio-file-desc}}
* {{msg-mw|Timedmedia-source-file-desc}}
* {{msg-mw|Timedmedia-source-file}}',
	'timedmedia-webm' => '{{optional}}
Used as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-source-audio-file-desc}}
* {{msg-mw|Timedmedia-source-file-desc}}
* {{msg-mw|Timedmedia-source-file}}',
	'timedmedia-mp4' => 'Used as <code>$1</code> in the following messages:
* {{msg-mw|Timedmedia-source-audio-file-desc}}
* {{msg-mw|Timedmedia-source-file-desc}}
* {{msg-mw|Timedmedia-source-file}}',
	'timedmedia-source-file' => 'The source file. Parameters:
* $1 - file type; any one of the following messages:
** {{msg-mw|Timedmedia-ogg}} - Optional message
** {{msg-mw|Timedmedia-webm}} - Optional message
** {{msg-mw|Timedmedia-mp4}}
See also:
* {{msg-mw|Timedmedia-source-audio-file-desc}}
* {{msg-mw|Timedmedia-source-file-desc}}
{{Identical|Source}}',
	'timedmedia-source-file-desc' => 'Source file description. This is a file title in the primary source attributes of a timed media file. I can look like "\'\'Original Ogg file, 640 × 480 (10 Mbps)\'\'". Parameters:
* $1 - file type; any one of the following messages:
** {{msg-mw|Timedmedia-ogg}} - Optional message
** {{msg-mw|Timedmedia-webm}} - Optional message
** {{msg-mw|Timedmedia-mp4}}
* $2 - resolution width
* $3 - resolution height
* $4 - human readable bitrate
See also:
* {{msg-mw|Timedmedia-source-audio-file-desc}} - for audio file',
	'timedmedia-source-audio-file-desc' => 'Source file description. Parameters:
* $1 - file type; any one of the following messages:
** {{msg-mw|Timedmedia-ogg}} - Optional message
** {{msg-mw|Timedmedia-webm}} - Optional message
** {{msg-mw|Timedmedia-mp4}}
* $2 - human readable bitrate
See also:
* {{msg-mw|Timedmedia-source-file-desc}} - for video file',
	'timedmedia-derivative-160p.ogv' => '{{optional}}',
	'timedmedia-derivative-360p.ogv' => '{{optional}}',
	'timedmedia-derivative-480p.ogv' => '{{optional}}',
	'timedmedia-derivative-720p.ogv' => '{{optional}}',
	'timedmedia-derivative-160p.webm' => '{{optional}}',
	'timedmedia-derivative-360p.webm' => '{{optional}}',
	'timedmedia-derivative-480p.webm' => '{{optional}}',
	'timedmedia-derivative-720p.webm' => '{{optional}}',
	'timedmedia-derivative-320p.mp4' => '{{optional}}',
	'timedmedia-derivative-480p.mp4' => '{{optional}}',
	'timedmedia-derivative-720p.mp4' => '{{optional}}',
	'timedmedia-derivative-ogg' => '{{optional}}',
	'timedmedia-derivative-desc-ogg' => '{{optional}}',
	'timedmedia-derivative-opus' => '{{optional}}',
	'timedmedia-derivative-desc-opus' => '{{optional}}',
	'timedmedia-derivative-mp3' => '{{optional}}',
	'timedmedia-derivative-desc-mp3' => '{{optional}}',
	'timedmedia-derivative-m4a' => '{{optional}}',
	'timedmedia-derivative-desc-m4a' => '{{optional}}',
	'timedmedia-subtitle-new' => 'Used as page title.',
	'timedmedia-subtitle-new-desc' => 'Refers to {{msg-mw|Timedmedia-subtitle-new-go}}.',
	'timedmedia-subtitle-new-go' => 'Used as label for the Submit button.

Preceded by (and used in) the description {{msg-mw|Timedmedia-subtitle-new-desc}}.
{{Identical|Go}}',
	'timedmedia-subtitle-language' => 'Subtitle names. Parameters are:
* $1 - subtitle language
* $2 - subtitle key
{{Identical|Subtitle}}',
	'timedmedia-subtitle-no-subtitles' => 'Parameters:
* $1 is a language name.',
	'timedmedia-subtitle-remote' => 'Used as page title. Parameters:
* $1 - the display name of the repository
The page body for this page title is:
* {{msg-mw|timedmedia-subtitle-remote-link}}',
	'timedmedia-subtitle-remote-link' => 'Used as page body. Parameters:
* $1 - the description URL of the file
* $2 - the display name of the repository
The page title for this message is:
* {{msg-mw|timedmedia-subtitle-remote}}',
	'timedmediahandler' => '{{doc-special|TimedMediaHandler}}',
	'timedmedia-videos' => 'number of videos on [[Special:TimedMediaHandler]].

Parameters:
* $1 - number of videos',
	'timedmedia-ogg-videos' => 'number of Ogg videos on [[Special:TimedMediaHandler]].

Parameters:
* $1 - number of videos',
	'timedmedia-webm-videos' => 'number of WebM videos on [[Special:TimedMediaHandler]].

Parameters:
* $1 - number of videos',
	'timedmedia-derivative-state-transcodes' => 'numer of transcodes
Parameters are:
* $1 number of transcodes',
	'timedmedia-derivative-state-active' => 'currently active transcoes
Parameters are:
* $1 number of transcodes',
	'timedmedia-derivative-state-queued' => 'queued transcode jobs
Parameters are:
* $1 number of transcodes',
	'timedmedia-derivative-state-failed' => 'failed transcode jobs
Parameters are:
* $1 number of transcodes',
	'timedmedia-file' => 'Used as table column header.
{{Identical|File}}',
	'right-transcode-reset' => '{{doc-right|transcode-reset}}',
	'right-transcode-status' => '{{doc-right|transcode-status}}',
	'action-transcode-status' => '{{doc-action|transcode-status}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author SPQRobin
 */
$messages['af'] = array(
	'timedmedia-desc' => "Hanteer Ogg Theora- en Vorbis-lêers met 'n JavaScript-mediaspeler", # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 klanklêer, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 video lêer, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 medialêer, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 klanklêer, lengte $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videolêer, lengte $2, $4×$5 pixels, $3',
	'timedmedia-ogg-long-general' => 'Ogg medialêer, lengte $2, $3',
	'timedmedia-ogg-long-error' => 'Ongeldige Ogg-lêer: $1',
	'timedmedia-more' => 'Meer…',
	'timedmedia-dismiss' => 'Sluit',
	'timedmedia-download' => 'Laai lêer af',
	'timedmedia-desc-link' => 'Aangaande die lêer',
	'timedmedia-minutes' => '{{PLURAL:$1|$1 minuut|$1 minute}}',
);

/** Albaamo innaaɬiilka (Albaamo innaaɬiilka)
 * @author Ulohnanne
 */
$messages['akz'] = array(
	'timedmedia-more' => 'Maatàasasi...',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'timedmedia-desc' => 'Mbajtës për mediat në kohën e duhur (video, audio, timedText) me transcoding të ZQM Theora / Vorbis', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg tingull $1 fotografi, $2',
	'timedmedia-ogg-short-video' => 'video file Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 media file, $2',
	'timedmedia-ogg-long-audio' => 'ZQM file $1 shëndoshë, gjatë $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 video file, gjatë $2, $4 × $5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'ZQM multiplexed audio / video file, $1, gjatë $2, $4 × $5 pixels, $3 e përgjithshme',
	'timedmedia-ogg-long-general' => 'Ogg media file, gjatë $2, $3',
	'timedmedia-ogg-long-error' => 'E pavlefshme Ogg file: $1',
	'timedmedia-no-player-js' => 'Na vjen keq, browser-i juaj ose ka JavaScript paaftë ose nuk ka asnjë lojtar të mbështetur. <br /> Ju mund të <a href="$1">shkarkoni clip</a> ose <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">shkarkoni një lojtar</a> për të luajtur clip në shfletuesin tuaj.',
	'timedmedia-more' => 'Më shumë ...',
	'timedmedia-dismiss' => 'Afër',
	'timedmedia-download' => 'Shkarko file',
	'timedmedia-desc-link' => 'Për këtë fotografi',
	'timedmedia-oggThumb-version' => 'OggHandler kërkon version oggThumb $1 ose më vonë.',
	'timedmedia-oggThumb-failed' => 'oggThumb dështuar për të krijuar tablo.',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'timedmedia-desc' => 'Maneyador de fichers sincronizatos (vidio, son y texto sincronizato) con transcodificación Ogg Theora/Vorbis', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Fichero de son ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Fichero de vidio ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Fichero multimedia ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Fichero de son ogg $1, durada $2, $3',
	'timedmedia-ogg-long-video' => 'Fichero de vidio ogg $1, durada $2, $4×$5 píxels, $3',
	'timedmedia-ogg-long-multiplexed' => 'fichero ogg multiplexato audio/vidio, $1, durada $2, $4×$5 píxels, $3 total',
	'timedmedia-ogg-long-general' => 'fichero ogg multimedia durada $2, $3',
	'timedmedia-ogg-long-error' => 'Fichero ogg no conforme: $1',
	'timedmedia-more' => 'Más…',
	'timedmedia-dismiss' => 'Zarrar',
	'timedmedia-download' => 'Escargar fichero',
	'timedmedia-desc-link' => 'Información sobre este fichero',
);

/** Arabic (العربية)
 * @author Alnokta
 * @author Meno25
 * @author OsamaK
 * @author روخو
 */
$messages['ar'] = array(
	'timedmedia-desc' => 'متحكم لملفات Ogg Theora وVorbis، مع لاعب جافاسكريت', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 ملف صوت، $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 ملف فيديو، $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 ملف ميديا، $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ملف صوت، الطول $2، $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 ملف فيديو، الطول $2، $4×$5 بكسل، $3',
	'timedmedia-ogg-long-multiplexed' => 'ملف Ogg مالتي بليكسد أوديو/فيديو، $1، الطول $2، $4×$5 بكسل، $3 إجمالي',
	'timedmedia-ogg-long-general' => 'ملف ميديا Ogg، الطول $2، $3',
	'timedmedia-ogg-long-error' => 'ملف Ogg غير صحيح: $1',
	'timedmedia-webm-short-video' => 'نسق WebM، $1 ملف فيديو $2',
	'timedmedia-webm-long-video' => 'ملف صوت/فيديو بنسق WebM , $1, الطول $2, $4×$5 بكسل، $3 إجمالا',
	'timedmedia-no-player-js' => 'عذرا، متصفحك إما انه لا يدعم الجافا سكريبت أو انها معطلة.<br />
تستطيع <a href="$1">تحميل المقطع</a> أو <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">تحميل مشغل</a> يستطيع تشغيل المقطع على متصفحك.',
	'timedmedia-more' => 'المزيد...',
	'timedmedia-dismiss' => 'أغلق',
	'timedmedia-download' => 'نزل الملف',
	'timedmedia-play-media' => 'تشغيل الوسائط',
	'timedmedia-desc-link' => 'عن هذا الملف',
	'timedmedia-status' => 'الحالة',
	'timedmedia-status-unknown' => 'حالة غير معروفة',
	'timedmedia-actions' => 'الإجراءات',
	'timedmedia-not-ready' => 'غير جاهز',
	'timedmedia-percent-done' => 'وصل لنسبة $1% انتهى',
	'timedmedia-ogg' => 'أو جي جي',
	'timedmedia-source-file' => '$1 مصدر',
	'timedmedia-derivative-desc-160p.ogv' => 'انخفاض عرض النطاق الترددي أوج فيديو (160P)',
	'timedmedia-derivative-desc-720p.ogv' => 'تحميل أوج فيديو بجودة عالية  (720P)',
	'timedmedia-subtitle-language' => '$1 ($2) ترجمات',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'timedmedia-more' => 'ܝܬܝܪ…',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'timedmedia-desc' => 'متحكم لملفات أو جى جى ثيورا و فوربيس، مع بلاير جافاسكريبت', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 ملف صوت، $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 ملف فيديو, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 ملف ميديا، $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ملف صوت، الطول $2، $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 ملف فيديو، الطول $2، $4×$5 بكسل، $3',
	'timedmedia-ogg-long-multiplexed' => 'ملف Ogg مالتى بليكسد أوديو/فيديو، $1، الطول $2، $4×$5 بكسل، $3 إجمالي',
	'timedmedia-ogg-long-general' => 'ملف ميديا Ogg، الطول $2، $3',
	'timedmedia-ogg-long-error' => 'ملف ogg مش صحيح: $1',
	'timedmedia-more' => 'أكتر...',
	'timedmedia-dismiss' => 'اقفل',
	'timedmedia-download' => 'نزل الملف',
	'timedmedia-desc-link' => 'عن الملف دا',
);

/** Asturian (asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'timedmedia-desc' => 'Remanador de soníu, videu y testu cronometráu, con sofitu pa los formatos WebM, Ogg Theora, Vorbis y srt',
	'timedmedia-ogg-short-audio' => 'Archivu de soníu ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Archivu de videu ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Archivu multimedia ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Archivu de soníu ogg $1, llonxitú $2, $3',
	'timedmedia-ogg-long-video' => 'Archivu de videu ogg $1, llonxitú $2, $4×$5 píxeles, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ficheru de soníu/videu ogg multiplexáu, $1, llonxitú $2, $4×$5 píxeles, $3',
	'timedmedia-ogg-long-general' => 'Archivu multimedia ogg, llonxitú $2, $3',
	'timedmedia-ogg-long-error' => 'Ficheru Ogg inválidu: $1',
	'timedmedia-webm-short-video' => 'Ficheru de videu  WebM $1, $2',
	'timedmedia-webm-long-video' => 'Ficheru de soníu/videu  WebM, $1, llonxitú $2, $4 × $5 pixels, $3 total',
	'timedmedia-flac-short-audio' => 'Ficheru de soníu FLAC, $1',
	'timedmedia-flac-long-audio' => 'Ficheru de soníu FLAC, duración $1, $2 total',
	'timedmedia-wav-short-audio' => 'Ficheru de soníu WAV, $1',
	'timedmedia-wav-long-audio' => 'Ficheru de soníu WAV, duración $1, $2 total',
	'timedmedia-wav-pcm-required' => 'Namái pue xubir WAV tipu PCM (Pulse Code Modulation).',
	'timedmedia-mp4-short-video' => 'Archivu de videu MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'Ficheru de soníu/videu  MP4, $1, llonxitú $2, $4 × $5 pixels, $3 total',
	'timedmedia-no-player-js' => 'Sentimoslo, o\'l so navegador tien desactiváu JavaScript o nun tien un reproductor compatible.<br />
Pue <a href="$1">descargar el clip</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">descargar un reproductor</a> pa reproducir el clip nel so navegador.',
	'timedmedia-more' => 'Más...',
	'timedmedia-dismiss' => 'Zarrar',
	'timedmedia-download' => 'Descargar archivu',
	'timedmedia-play-media' => 'Reproducir el mediu',
	'timedmedia-desc-link' => 'Tocante a esti archivu',
	'timedmedia-oggThumb-version' => 'OggHandler requier oggThumb version $1 o mayor.',
	'timedmedia-oggThumb-failed' => 'oggThumb nun pudo crear la miniatura.',
	'timedmedia-status-header' => 'Estáu de trescodificación',
	'timedmedia-update-status' => "Anovar l'estáu de trescodificación",
	'timedmedia-status' => 'Estáu',
	'timedmedia-status-unknown' => 'Estáu desconocíu',
	'timedmedia-transcodeinfo' => 'Descripción del deriváu de trescodificación',
	'timedmedia-actions' => 'Aiciones',
	'timedmedia-direct-link' => 'Descargar el deriváu',
	'timedmedia-not-ready' => 'Nun ta preparáu',
	'timedmedia-completed-on' => 'Trescodificación completada el $1',
	'timedmedia-error-on' => 'Error na trescodificación del $1',
	'timedmedia-started-transcode' => 'La trescodificación principió hai $1. $2',
	'timedmedia-percent-done' => 'Fecho alredor del $1%',
	'timedmedia-in-job-queue' => 'Amestáu a la cola de trabayos hai $1',
	'timedmedia-unknown-target-size' => 'Tamañu del destín desconocíu; $1 codificáu',
	'timedmedia-days' => '{{PLURAL:$1|1 día|$1 díes}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hora|$1 hores}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minutu|$1 minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segundu|$1 segundos}}',
	'timedmedia-reset' => 'Reaniciar la trescodificación',
	'timedmedia-reset-confirm' => 'Al reaniciar esta trescodificación desaniciará tolos ficheros esistentes (si los hai), y volverá a amestar la trescodificación a la cola de trabayos. Llevará un tiempu volver a trescodificar.<br /><br />
¿Ta seguru de que quier siguir?',
	'timedmedia-reset-error' => 'Error al reaniciar el trabayu de trescodificación.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Fonte $1',
	'timedmedia-source-file-desc' => 'Ficheru $1 orixinal, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Ficheru $1 orixinal ($2)',
	'timedmedia-derivative-desc-160p.ogv' => "Videu Ogg d'anchu de banda baxu (160P)",
	'timedmedia-derivative-desc-360p.ogv' => 'Videu Ogg tresmitible pela web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Videu Ogg tresmitible pela web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => "Videu Ogg descargable d'alta calida (720P)",
	'timedmedia-derivative-desc-160p.webm' => 'Videu WebM tresmitible pela web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Videu WebM tresmitible pela web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Videu WebM tresmitible pela web (480P)',
	'timedmedia-derivative-desc-720p.webm' => "Videu WebM descargable d'alta calida (720P)",
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 compatible colos preseos (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 tresmitible pela web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 de calidá HD (720P)',
	'timedmedia-subtitle-new' => 'Crear una traducción nueva o editar la esistente',
	'timedmedia-subtitle-new-desc' => "Seleicione la llingua y calque nel botón '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Dir',
	'timedmedia-subtitle-language' => 'Subtítulos en $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Nun hai nengún videu asociáu cola páxina de subtítulos actual',
	'timedmedia-subtitle-no-subtitles' => "Anguaño nun hai subtítulos en $1 pa esti videu, pue [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar esta páxina] p'amestalos",
	'timedmedia-subtitle-remote' => "El testu cronometráu d'esti ficheru ta agospiáu en $1",
	'timedmedia-subtitle-remote-link' => "Pue [$1 ver la páxina de descripción] d'esti ficheru en $2",
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 videu|$1 videos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 videu|$1 videos}} Ogg',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 videu|$1 videos}} WebM',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 trescodificación|$1 trescodificaciones}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 trescodificación activa|$1 trescodificaciones actives}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 trescodificación|$1 trescodificaciones}} na cola',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 trescodificación fallida|$1 trescodificaciones fallíes}}',
	'timedmedia-file' => 'Ficheru',
	'right-transcode-reset' => 'Reaniciar los videos fallíos o trescodificaos pa que vuelvan a ponese na cola de trabayos.',
	'right-transcode-status' => "Ver [[Special:TimedMediaHandler|información sobre l'actividá de trescodificación actual]]",
	'action-transcode-status' => "ver l'estáu actual de la trescodificación",
);

/** Kotava (Kotava)
 * @author Sab
 */
$messages['avk'] = array(
	'timedmedia-download' => 'Iyeltakkalvajara',
	'timedmedia-desc-link' => 'Icde bat iyeltak',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'timedmedia-status' => 'Status',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'timedmedia-days' => '{{PLURAL:$1|$1 көн|$1 көн}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|$1 сәғәт|$1 сәғәт}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|$1 минут|$1 минут}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|$1 секунд|$1 секунд}}', # Fuzzy
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'timedmedia-desc' => 'دسگیره په فایلان Ogg Theora و Vorbis, گون پخش کنوک جاوا اسکرسیپت', # Fuzzy
	'timedmedia-ogg-short-audio' => 'فایل صوتی Ogg $1، $2',
	'timedmedia-ogg-short-video' => 'فایل تصویری Ogg $1، $2',
	'timedmedia-ogg-short-general' => 'فایل مدیا Ogg $1، $2',
	'timedmedia-ogg-long-audio' => 'اوجی جی  $1 فایل صوتی, طول $2, $3',
	'timedmedia-ogg-long-video' => 'اوجی جی $1 فایل ویدیو, طول $2, $4×$5 پیکسل, $3',
	'timedmedia-ogg-long-multiplexed' => 'اوجی جی چند دابی فایل صوت/تصویر, $1, طول $2, $4×$5 پیکسل, $3 کل',
	'timedmedia-ogg-long-general' => 'اوجی جی فایل مدیا, طول $2, $3',
	'timedmedia-ogg-long-error' => 'نامعتبرین فایل اوجی جی: $1',
	'timedmedia-more' => 'گیشتر...',
	'timedmedia-dismiss' => 'بندگ',
	'timedmedia-download' => 'ایرگیزگ فایل',
	'timedmedia-desc-link' => 'ای فایل باره',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 * @author Geopoet
 */
$messages['bcl'] = array(
	'timedmedia-desc' => 'Parakapot para sa audio, bidyo asin pinag-orasan na teksto, na igwa nin pormat kan suporta para sa WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 sagunson nin tanog, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 sagunson nin bidyo, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 sagunson nin midya, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 sagunson nin tanog, an laba $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 sagunson nin bidyo, an laba $2, $4 x $5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg pinaghalong sagunson nin audio/bidyo, $1, an laba $2, $4 x $5 piksel, $3',
	'timedmedia-ogg-long-general' => 'Ogg sagunson nin midya, an laba $2, $3',
	'timedmedia-ogg-long-error' => 'Imbalidong sagunson nin Ogg: $1',
	'timedmedia-webm-short-video' => 'Webm $1 sagunson nin bidyo, $2',
	'timedmedia-webm-long-video' => 'WebM sagunson nin audio/bidyo, $1, an laba $2, $4 x $5 piksel, $3 sa bilog na kagabsan',
	'timedmedia-flac-short-audio' => 'FLAC sagunson nin audio, $1',
	'timedmedia-flac-long-audio' => 'FLAC sagunson nin audio, an laba $1, $2 sa bilog na kagabsan',
	'timedmedia-wav-short-audio' => 'WAV sagunson nin audio, $1',
	'timedmedia-wav-long-audio' => 'WAV sagunson nin audio, an laba $1, $2 sa bilog na kagabsan',
	'timedmedia-wav-pcm-required' => 'Ika makakarga sana nin PCM (Pulse Code Modulation) WAV.',
	'timedmedia-mp4-short-video' => 'MP$ $1 sagunson nin bidyo, $2',
	'timedmedia-mp4-long-video' => 'MP4 sagunson nin audio/bidyo, $1, an laba $2, $4 x $5 piksel, $3 sa bilog na kagabsan',
	'timedmedia-no-player-js' => 'Sori po, an saimong pangilyaw baya pinagpundo an JavaScript o mayo gayod nin arinmang pinagsuportaran na parapaandar. <br /> Ika <a href="$1">makakapagkarga nin klip</a> o baya <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">magkarga nin sarong parapaandar</a> tanganing paandaron an klip kan saimong kilyawan.',
	'timedmedia-more' => 'Dakolon pa..',
	'timedmedia-dismiss' => 'Isara',
	'timedmedia-download' => 'Ikarga an sagunson',
	'timedmedia-play-media' => 'Paandaron an midya',
	'timedmedia-desc-link' => 'Mapanungod kaining sagunson',
	'timedmedia-oggThumb-version' => 'OggHandler minahagad sa oggThumb bersyon na $1 o kahurihi.',
	'timedmedia-oggThumb-failed' => 'oggThumb nagpalya sa pagmukna kan sadit na ladawan',
	'timedmedia-status-header' => 'Kamugtakan kan panggantaw na kodigo',
	'timedmedia-update-status' => 'Sumpayan an kamugtakan kan panggantaw na kodigo',
	'timedmedia-status' => 'Kamugtakan',
	'timedmedia-status-unknown' => 'Bakong aram na kamugtakan',
	'timedmedia-transcodeinfo' => 'Deribatibong deskripsyon kan panggantaw na kodigo',
	'timedmedia-actions' => 'Mga aksyon',
	'timedmedia-direct-link' => 'Ikarga an deribatibo',
	'timedmedia-not-ready' => 'Dae pa handa',
	'timedmedia-completed-on' => 'Pinagkumpletong panggantaw na kodigo $1',
	'timedmedia-error-on' => 'Kasalaan sa panggantaw na kodigo sa $1',
	'timedmedia-started-transcode' => 'An panggantaw na kodigo pinagpoonan mga $1 an nakaagi. $2',
	'timedmedia-percent-done' => 'Haros $1% an tapos na',
	'timedmedia-in-job-queue' => 'Pinagdugang sa haralatan nin Trabaho mga $1 an nakaagi',
	'timedmedia-unknown-target-size' => 'Dae aram an sukol kan target, $1 pinagkodigo na',
	'timedmedia-days' => '{{PLURAL:$1|1 aldaw|$1 mga aldaw}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 oras|$1 mga oras}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segundo|$1 segundos}}',
	'timedmedia-reset' => 'Pakibaguha an panggantaw na kodigo',
	'timedmedia-reset-confirm' => 'Sa pagbabago kaining panggantaw na kodigo magtatangkas nin arinman na eksistidong sagunson (kun yaon), asin magdudugang otro kan panggantaw na kodigo sa haralatan nin trabaho. Ini minakaipo nin nagkapirang oras tangani na otrong ipaggantaw an kodigo.  <br /><br /> Segurado ka na muya mong magpadagos?',
	'timedmedia-reset-error' => 'Kasalaan sa pagbabago kan trabaho nin panggantaw na kodigo.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 pinagkuanan',
	'timedmedia-source-file-desc' => 'Orihinal $1 na sagunson, $2 x $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Orihinal $1 na sagunson ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Hababaong kalawigan Ogg bidyo (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Maantabayanan sa Web na bidyo kan Ogg (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Maantabayanan sa Web na bidyo kan Ogg (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Halangkaw na kalidad na maikakargang bidyo kan Ogg (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Maantabayanan sa Web na bidyo kan WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Maantabayanan sa Web na bidyo kan WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Maantabayanan sa Web na bidyo kan WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Halangkaw na kalidad na maikakargang bidyo kan WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'Masayon sa aparato MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Maantabayanan sa Web na MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD na kalidad MP4 (720P)',
	'timedmedia-subtitle-new' => 'Magmukna nin baguhong dakit-taramon o liwaton an eksistido na',
	'timedmedia-subtitle-new-desc' => "Magpili nin lengguwahe asin pinduton an '''{{int:Timedmedia-subtitle-new-go}}''' na dutdutan",
	'timedmedia-subtitle-new-go' => 'Magduman',
	'timedmedia-subtitle-language' => '$1 ($2) mga sub-titulo',
	'timedmedia-subtitle-no-video' => 'Mayo tabing bidyo na asosyado na igwa nin sa ngunyan na subtitulo kan pahina',
	'timedmedia-subtitle-no-subtitles' => 'Mayo tabi nin sa ngunyan na mga subtitulo sa $1 para kaining bidyo, ika tabi [{{fullurl:{{FULLPAGENAME}}|action=edit}} makapagliwat kaining pahina] tanganing maidugang sinda',
	'timedmedia-subtitle-remote' => 'Pinag-orasang teksto para kaining sagunson iyo an pinagbunsod sa $1',
	'timedmedia-subtitle-remote-link' => 'Ika tabi [$1 makakatanaw sa pahina kan deskripsyon] para kaining sagunson sa $2',
	'timedmediahandler' => 'Pinag-orasan na Parakapot kan Midya',
	'timedmedia-videos' => '{{PLURAL:$1|$1 bidyo|$1 mga bidyo}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg bidyo|$1 Ogg mga bidyo}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM bidyo|$1 WebM mga bidyo}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 panggantaw na kodigo|$1 panggantaw na mga kodigo}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 nagdadalagan na panggantaw na kodigo|$1 nagdadalagan na panggantaw na mga kodigo}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 pinaghahalat na panggantaw na kodigo|$1 pinaghahalat na panggantaw na mga kodigo}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 nagpalyang panggantaw na kodigo|$1 nagpalyang panggantaw na mga kodigo}}',
	'timedmedia-file' => 'Sagunson',
	'right-transcode-reset' => 'An pagbágo nagpalya o an pinaggantaw na kodigong mga bidyo kaya sinda pinagsingit giraray sa haralatan kan trabaho.',
	'right-transcode-status' => 'Patanaw [[Special:TimedMediaHandler|impormasyon mapanungod sa ngunyan na aktibidad kan panggantaw na kodigo]]',
	'action-transcode-status' => 'tanawon an sa ngunyan na kamugtakan kan panggangtaw na kodigo',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'timedmedia-desc' => 'Апрацоўшчык аўдыё, відэа і субтытраў у фарматах WebM, Ogg Theora, Vorbis і SRT',
	'timedmedia-ogg-short-audio' => 'Аўдыё-файл Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Відэа-файл у фармаце Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Мэдыяфайл Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'аўдыё-файл Ogg $1, даўжыня $2, $3',
	'timedmedia-ogg-long-video' => 'відэа-файл Ogg $1, даўжыня $2, $4×$5 піксэляў, $3',
	'timedmedia-ogg-long-multiplexed' => 'мультыплексны аўдыё/відэа-файл Ogg, $1, даўжыня $2, $4×$5 піксэляў, усяго $3',
	'timedmedia-ogg-long-general' => 'мэдыяфайл Ogg, даўжыня $2, $3',
	'timedmedia-ogg-long-error' => 'Няслушны файл у фармаце Ogg: $1',
	'timedmedia-webm-short-video' => 'WebM $1 відэафайл, $2',
	'timedmedia-webm-long-video' => 'Аўдыё/відэа-файл WebM, $1, працягласьць $2, $4×$5 піксэлаў, усяго $3',
	'timedmedia-flac-short-audio' => 'Аўдыёфайл FLAC, $1',
	'timedmedia-flac-long-audio' => 'Аўдыёфайл FLAC, працягласьць $1, усяго $2',
	'timedmedia-mp4-short-video' => 'MP4 $1 відэафайл, $2',
	'timedmedia-no-player-js' => 'Прабачце, але ў Вашым браўзэры адключаны JavaScript альбо няма неабходнага прайгравальніка.<br />
Вы можаце <a href="$1">загрузіць кліп</a> ці <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">загрузіць прайгравальнік</a> для прайграваньня кліпу ў Вашым браўзэры.',
	'timedmedia-more' => 'Болей…',
	'timedmedia-dismiss' => 'Назад',
	'timedmedia-download' => 'Загрузіць файл',
	'timedmedia-play-media' => 'Прайграць',
	'timedmedia-desc-link' => 'Інфармацыя пра гэты файл',
	'timedmedia-oggThumb-version' => 'OggHandler патрабуе oggThumb вэрсіі $1 ці больш позьняй.',
	'timedmedia-oggThumb-failed' => 'oggThumb не атрымалася стварыць мініятуру.',
	'timedmedia-status-header' => 'Статус транскадаваньня',
	'timedmedia-update-status' => 'Абнавіць статус транскадаваньня',
	'timedmedia-status' => 'Статус',
	'timedmedia-status-unknown' => 'Статус невядомы',
	'timedmedia-transcodeinfo' => 'Апісаньне вынікаў транскадаваньня',
	'timedmedia-actions' => 'Дзеяньні',
	'timedmedia-direct-link' => 'Спампаваць вытворны варыянт',
	'timedmedia-not-ready' => 'Не гатовы',
	'timedmedia-completed-on' => 'Транскадаваньне завершанае $1',
	'timedmedia-error-on' => 'Памылка ў час транскадаваньня а $1',
	'timedmedia-started-transcode' => 'Транскадаваньне пачалося $1 таму. $2',
	'timedmedia-percent-done' => 'Гатова каля $1%',
	'timedmedia-in-job-queue' => 'Дададзена ў чаргу заданьняў $1 таму',
	'timedmedia-unknown-target-size' => 'Выніковы памер невядомы, $1 закадавана',
	'timedmedia-days' => '$1 {{PLURAL:$1|дзень|дні|дзён}}',
	'timedmedia-hours' => '$1 {{PLURAL:$1|гадзіну|гадзіны|гадзінаў}}',
	'timedmedia-minutes' => '$1 {{PLURAL:$1|хвіліну|хвіліны|хвілінаў}}',
	'timedmedia-seconds' => '$1 {{PLURAL:$1|сэкунду|сэкунды|сэкундаў}}',
	'timedmedia-reset' => 'Перазапусьціць транскадаваньне',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Крыніца $1',
	'timedmedia-source-file-desc' => 'Арыгінал у $1, $2×$3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Арыгінал у $1 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Нізкапаточнае Ogg-відэа (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Паточнае Ogg-відэа (360 пкс)',
	'timedmedia-derivative-desc-480p.ogv' => 'Паточнае Ogg-відэа (480 пкс)',
	'timedmedia-derivative-desc-720p.ogv' => 'Высакаякаснае Ogg-відэа для загрузкі (720p)',
	'timedmedia-derivative-desc-360p.webm' => 'Паточны WebM (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'Паточны WebM (480p)',
	'timedmedia-derivative-desc-720p.webm' => 'Высакаякаснае WebM-відэа для загрузкі (720p)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 HD-якасьці (720P)',
	'timedmedia-subtitle-new' => 'Стварыць новы пераклад ці рэдагаваць існуючы',
	'timedmedia-subtitle-new-go' => 'Пачаць',
	'timedmedia-subtitle-language' => 'Субтытры ($2) на $1',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1}} відэа',
	'timedmedia-file' => 'Файл',
);

/** Bulgarian (български)
 * @author Borislav
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'timedmedia-desc' => 'Приложение за файлове тип Ogg Theora и Vorbis, с плейър на JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 звуков файл, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 видео файл, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 звуков файл, продължителност $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 видео файл, продължителност $2, $4×$5 пиксела, $3',
	'timedmedia-ogg-long-general' => 'Мултимедиен файл в ogg формат с дължина $2, $3',
	'timedmedia-ogg-long-error' => 'Невалиден ogg файл: $1',
	'timedmedia-more' => 'Повече...',
	'timedmedia-dismiss' => 'Затваряне',
	'timedmedia-download' => 'Изтегляне на файла',
	'timedmedia-desc-link' => 'Информация за файла',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Zaheen
 */
$messages['bn'] = array(
	'timedmedia-ogg-short-audio' => 'অগ $1 সাউন্ড ফাইল, $2',
	'timedmedia-ogg-short-video' => 'অগ $1 ভিডিও ফাইল, $2',
	'timedmedia-ogg-short-general' => 'অগ $1 মিডিয়া ফাইল, $2',
	'timedmedia-ogg-long-audio' => 'অগ $1 সাউন্ড ফাইল, দৈর্ঘ্য $2, $3',
	'timedmedia-ogg-long-video' => 'অগ $1 ভিডিও ফাইল, দৈর্ঘ্য $2, $4×$5 পিক্সেল, $3',
	'timedmedia-ogg-long-multiplexed' => 'অগ মাল্টিপ্লেক্সকৃত অডিও/ভিডিও ফাইল, $1, দৈর্ঘ্য $2, $4×$5 পিক্সেল, $3 সামগ্রিক',
	'timedmedia-ogg-long-general' => 'অগ মিডিয়া ফাইল, দৈর্ঘ্য $2, $3',
	'timedmedia-ogg-long-error' => 'অবৈধ অগ ফাইল: $1',
	'timedmedia-more' => 'আরও...',
	'timedmedia-dismiss' => 'বন্ধ',
	'timedmedia-download' => 'ফাইল ডাউনলোড করুন',
	'timedmedia-desc-link' => 'এই ফাইলের বৃত্তান্ত',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'timedmedia-desc' => 'Skor video, son ha testenn sinkronelaet gant ar furmadoù WebM, Ogg Theora hag SRT skoret',
	'timedmedia-ogg-short-audio' => 'Restr son Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Restr video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Restr media Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Restr son Ogg $1, pad $2, $3',
	'timedmedia-ogg-long-video' => 'Restr video Ogg $1, pad $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Restr Ogg klevet/video liesplezhet $1, pad $2, $4×$5 piksel, $3 hollad',
	'timedmedia-ogg-long-general' => 'Restr media Ogg, pad $2, $3',
	'timedmedia-ogg-long-error' => 'Restr ogg direizh : $1',
	'timedmedia-webm-short-video' => 'Restr video WebM $1, $2',
	'timedmedia-webm-long-video' => 'Restr video/son WebM, $1, pad $2, $4 × $5 piksel, $3 en holl',
	'timedmedia-no-player-js' => 'Ho tigarez, pe eo diweredekaet JavaScript war ho merdeer pen n\'eo ket skoret lenner ebet gantañ.<br />
<a href="$1">Pellgargañ ar c\'hlip</a> a c\'hallit pe <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">pellgargañ ul lenner</a> da lenn ar c\'hlip gant ho merdeer.',
	'timedmedia-more' => "Muioc'h...",
	'timedmedia-dismiss' => 'Serriñ',
	'timedmedia-download' => 'Pellgargañ ar restr',
	'timedmedia-play-media' => 'Lenn ar media',
	'timedmedia-desc-link' => 'Diwar-benn ar restr-mañ',
	'timedmedia-oggThumb-version' => "Rekis eo stumm $1 oggThumb, pe nevesoc'h, evit implijout OggHandler.",
	'timedmedia-oggThumb-failed' => "N'eo ket deuet a-benn oggThumb da grouiñ ar munud.",
	'timedmedia-status' => 'Statud',
	'timedmedia-status-unknown' => 'Statud dianav',
	'timedmedia-actions' => 'Oberoù',
	'timedmedia-not-ready' => "N'eo ket prest",
	'timedmedia-percent-done' => 'War-dro $1 % zo bet graet',
	'timedmedia-days' => '$1 {{PLURAL: $1|devezh|devezh}}', # Fuzzy
	'timedmedia-hours' => '$1 {{PLURAL: $1|eurvezh|eurvezh}}', # Fuzzy
	'timedmedia-minutes' => '$1 {{PLURAL: $1|munutenn|munutenn}}', # Fuzzy
	'timedmedia-seconds' => '$1 {{PLURAL:$1|eilenn|eilenn}}', # Fuzzy
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Mammenn $1',
	'timedmedia-source-file-desc' => 'Orin $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg izelgas (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg lennus war-eeun war ar Gwiad (360p)',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg lennus war-eeun war ar Gwiad (480p)',
	'timedmedia-derivative-desc-720p.ogv' => "Video Ogg da bellgargañ gant ur c'halite a-feson (720p)",
	'timedmedia-derivative-desc-360p.webm' => 'WebM lennus war-eeun eus ar Gwiad (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM lennus war-eeun eus ar Gwiad (480p)',
	'timedmedia-derivative-desc-720p.webm' => "Video WebM da bellgargañ gant ur c'halite a-feson (720p)",
	'timedmedia-subtitle-new-go' => 'Mont',
	'timedmedia-subtitle-language' => 'istitloù e $1 ($2)',
	'timedmedia-file' => 'Restr',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'timedmedia-desc' => 'Upravljač za zvuk, video i vremenski tekst sa podrškom formata za WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 zvučna datoteka, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 video datoteka, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 medijalna datoteka, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 zvučna datoteka, dužina $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 video datoteka, dužina $2, $4×$5 piksela, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multipleksna zvučna/video datoteka, $1, dužina $2, $4×$5 piksela, $3 sveukupno',
	'timedmedia-ogg-long-general' => 'Ogg medijalna datoteka, dužina $2, $3',
	'timedmedia-ogg-long-error' => 'Nevaljana ogg datoteka: $1',
	'timedmedia-wav-long-audio' => 'WAV audio datoteka, dužina $1, $2 sveukupno',
	'timedmedia-wav-pcm-required' => 'Možete postaviti samo PCM (Pulse Code Modulation) WAV.',
	'timedmedia-no-player-js' => 'Žao nam je, vaš preglednik ili je onemogućio JavaScript ili nema nijednog podržanog playera.<br />
Možete <a href="$1">učitati klip</a> ili <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">učitati player</a> za reproduciranje klipa u vašem pregledniku.',
	'timedmedia-more' => 'Više...',
	'timedmedia-dismiss' => 'Zatvori',
	'timedmedia-download' => 'Učitaj datoteku',
	'timedmedia-desc-link' => 'O ovoj datoteci',
	'timedmedia-oggThumb-version' => 'OggHandler zahtijeva oggThumb verziju $1 ili kasniju.',
	'timedmedia-oggThumb-failed' => 'oggThumb nije uspio napraviti smanjeni pregled.',
	'timedmedia-source-file' => '$1 izvor',
	'timedmedia-source-file-desc' => 'Original $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-subtitle-language' => '$1 ($2) podnaslovi',
);

/** Catalan (català)
 * @author Aleator
 * @author Paucabot
 * @author Pitort
 * @author SMP
 * @author Toniher
 * @author Vriullop
 */
$messages['ca'] = array(
	'timedmedia-desc' => 'Gestor de fitxers de vídeo, àudio i text sincronitzat amb suport pels formats WebM, Ogg Theora, Vorbi i srt',
	'timedmedia-ogg-short-audio' => "Fitxer OGG d'àudio $1, $2",
	'timedmedia-ogg-short-video' => 'Fitxer OGG de vídeo $1, $2',
	'timedmedia-ogg-short-general' => 'Fitxer multimèdia OGG $1, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 fitxer de so, llargada $2, $3',
	'timedmedia-ogg-long-video' => 'Fitxer OGG de vídeo $1, llargada $2, $4×$5 píxels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Arxiu àudio/vídeo multiplex, $1, llargada $2, $4×$5 píxels, $3 de mitjana',
	'timedmedia-ogg-long-general' => 'Fitxer multimèdia OGG, llargada $2, $3',
	'timedmedia-ogg-long-error' => 'Fitxer OGG invàlid: $1',
	'timedmedia-more' => 'Més...',
	'timedmedia-dismiss' => 'Tanca',
	'timedmedia-download' => 'Descarrega el fitxer',
	'timedmedia-desc-link' => 'Informació del fitxer',
	'timedmedia-days' => '{{PLURAL:$1|1 dia|$1 dies}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hora|$1 hores}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minut|$1 minuts}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segon|$1 segons}}',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file-desc' => 'Original $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-subtitle-language' => '$1 ($2) subtítols',
	'timedmedia-videos' => '{{PLURAL:$1|$1 vídeo|$1 vídeos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 vídeo Ogg|$1 vídeos Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 vídeo WebM|$1 vídeosWebM}}',
	'timedmedia-file' => 'Fitxer',
);

/** Chechen (нохчийн)
 * @author Sasan700
 * @author Умар
 */
$messages['ce'] = array(
	'timedmedia-ogg-short-audio' => 'Аьзнийн файл Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'аьзнийн файл Ogg $1, дохалла (хан) $2, $3',
	'timedmedia-download' => 'Файл чуяккхар',
	'timedmedia-status' => 'Хьал',
	'timedmedia-actions' => 'Дийраш',
	'timedmedia-source-file' => 'Хьост $1',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'right-transcode-reset' => 'ڕێکخستنەوەی ڤیدیۆ سەرنەکوتووەکان یان ترانسکۆدکراوەکان ھەتا دیسان بچنەوە ناو ڕیزی کارەوە.',
	'right-transcode-status' => 'دیتنی [[تایبەت:TimedMediaHandler|زانیاری لەمەڕ چالاکیی ترانسکۆدی ھەنووکەیی]]', # Fuzzy
);

/** Czech (česky)
 * @author Chmee2
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'timedmedia-desc' => 'Obsluha zvuků, videa a časovaného textu s podporou formátů WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Zvukový soubor ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Videosoubor ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Multimediální soubor ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Zvukový soubor ogg $1, délka $2, $3',
	'timedmedia-ogg-long-video' => 'Videosoubor $1, délka $2, $4×$5 pixelů, $3',
	'timedmedia-ogg-long-multiplexed' => 'multiplexovaný audio/video soubor Ogg, $1, délka $2, $4×$5 pixelů, celkem $3',
	'timedmedia-ogg-long-general' => 'Soubor média ogg, délka $2, $3',
	'timedmedia-ogg-long-error' => 'Chybný soubor ogg: $1',
	'timedmedia-webm-short-video' => 'Videosoubor WebM $1, $2',
	'timedmedia-webm-long-video' => 'audio/video soubor WebM, $1, délka $2, $4×$5 pixelů, celkem $3',
	'timedmedia-mp4-short-video' => 'Videosoubor MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'audio/video soubor MP4, $1, délka $2, $4×$5 pixelů, celkem $3',
	'timedmedia-no-player-js' => 'Je mi líto, ale váš prohlížeč má buď vypnutý JavaScript, nebo nemáte žádný podporovaný přehrávač.<br />
Můžete si <a href="$1">stáhnout klip</a> nebo si <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download/cs">stáhnout přehrávač</a>, kterým si klip přehrajete v prohlížeči.',
	'timedmedia-more' => 'Více...',
	'timedmedia-dismiss' => 'Zavřít',
	'timedmedia-download' => 'Stáhnout soubor',
	'timedmedia-play-media' => 'Přehrát média',
	'timedmedia-desc-link' => 'O tomto souboru',
	'timedmedia-oggThumb-version' => 'OggHandler vyžaduje oggThumb verze $1 nebo novější.',
	'timedmedia-oggThumb-failed' => 'oggThumb nedokázal vytvořit náhled.',
	'timedmedia-status-header' => 'Stav transkódování',
	'timedmedia-update-status' => 'Aktualizovat stav transkódování',
	'timedmedia-status' => 'Stav',
	'timedmedia-status-unknown' => 'Neznámý stav',
	'timedmedia-actions' => 'Akce',
	'timedmedia-not-ready' => 'Nepřipraveno',
	'timedmedia-completed-on' => 'Transkódování dokončeno v $1',
	'timedmedia-error-on' => 'Chyba transkódování v $1',
	'timedmedia-started-transcode' => 'Transkódování začalo před $1. $2',
	'timedmedia-percent-done' => 'Hotovo asi $1 %',
	'timedmedia-in-job-queue' => 'Před $1 přidáno do fronty',
	'timedmedia-unknown-target-size' => 'Neznámá výsledná velikost, zakódováno $1',
	'timedmedia-days' => '$1 {{PLURAL:$1|den|dny|dní}}',
	'timedmedia-hours' => '$1 {{PLURAL:$1|hodina|hodiny|hodin}}',
	'timedmedia-minutes' => '$1 {{PLURAL:$1|minuta|minuty|minut}}',
	'timedmedia-seconds' => '$1 {{PLURAL:$1|sekunda|sekundy|sekund}}',
	'timedmedia-reset' => 'Obnovit transkódování',
	'timedmedia-subtitle-new' => 'Vytvoření nového překladu nebo editace stávajícího',
	'timedmedia-subtitle-new-desc' => "Nahraďte část '''$1''' svým [[:cs:ISO 639|kódem jazyka]] a stiskněte tlačítko '''{{int:Timedmedia-subtitle-new-go}}'''", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Přejít',
	'timedmedia-subtitle-language' => 'titulky v jazyce $1 ($2)',
	'timedmedia-subtitle-no-video' => 'K aktuální stránce titulků nepatří žádné video.',
	'timedmedia-subtitle-no-subtitles' => 'K tomuto videu momentálně neexistují titulky v jazyce $1, přidat je můžete  [{{fullurl:{{FULLPAGENAME}}|action=edit}} editací této stránky]',
	'timedmedia-subtitle-remote' => 'Synchronizovaný text k tomuto souboru je uložen na $1',
	'timedmedia-subtitle-remote-link' => '[$1 Stránku s popisem tohoto souboru] si můžete prohlédnout na $2',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videa|$1 videí}}',
	'timedmedia-ogg-videos' => '$1 {{PLURAL:$1|video|videa|videí}} Ogg',
	'timedmedia-webm-videos' => '$1 {{PLURAL:$1|video|videa|videí}} WebM',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transkódování}}',
	'timedmedia-derivative-state-active' => '$1 {{PLURAL:$1|probíhající|probíhající|probíhajících}} transkódování',
	'timedmedia-derivative-state-queued' => '$1 {{PLURAL:$1|naplánované|naplánovaná|naplánovaných}} transkódování',
	'timedmedia-derivative-state-failed' => '$1 {{PLURAL:$1|neúspěšné|neúspěšná|neúspěšných}} transkódování',
	'timedmedia-file' => 'Soubor',
	'right-transcode-status' => 'Zobrazení [[Special:TimedMediaHandler|informací o probíhajícím transkódování]]',
	'action-transcode-status' => 'vidět aktuální stav transkódování',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'timedmedia-dismiss' => 'ꙁакрꙑи',
	'timedmedia-file' => 'дѣло',
);

/** Danish (dansk)
 * @author Byrial
 * @author Christian List
 * @author Fnielsen
 * @author HenrikKbh
 * @author Jon Harald Søby
 * @author Peter Alberti
 * @author Simeondahl
 * @author Steenth
 */
$messages['da'] = array(
	'timedmedia-desc' => 'Understøttelse for lyd, video og tidsbestemt txt med formaterne WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 lydfil, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videofil, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 mediafil, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 lydfil, længde $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videofil, længde $2, $4×$5 pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Sammensat Ogg-lyd- og -videofil, $1, længde $2, $4×$5 pixel, $3 samlet',
	'timedmedia-ogg-long-general' => 'Ogg mediafil, længde $2, $3',
	'timedmedia-ogg-long-error' => 'Ugyldig Ogg-fil: $1',
	'timedmedia-webm-short-video' => 'WebM $1 videofil, $2',
	'timedmedia-webm-long-video' => 'WebM audio/video fil, $1, længde  $2,  $4 × $5 pixel, $3 samlet',
	'timedmedia-flac-short-audio' => 'FLAC lydfil, $1',
	'timedmedia-flac-long-audio' => 'FLAC lydfil, varighed $1, $2 samlet',
	'timedmedia-wav-short-audio' => 'WAV lydfil, $1',
	'timedmedia-wav-long-audio' => 'WAV lydfil, varighed $1, $2 samlet',
	'timedmedia-wav-pcm-required' => 'Du kan kun uploade PCM (Pulse Code Modulation) WAV.',
	'timedmedia-mp4-short-video' => 'Mp4 $1 videofil, $2',
	'timedmedia-mp4-long-video' => 'Mp4-fil for audio/video, $1, længde $2, $4 × $5 pixel, $3 samlet',
	'timedmedia-no-player-js' => 'Beklager, men din browser har enten deaktiveret JavaScript eller har ikke en afspiller, som vi understøtter.<br />
Du kan enten <a href="$1">hente klippet</a> eller <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">hente en afspiller</a> til at afspille klippet i din browser.',
	'timedmedia-more' => 'Mere...',
	'timedmedia-dismiss' => 'Luk',
	'timedmedia-download' => 'Download fil',
	'timedmedia-play-media' => 'Afspil medier',
	'timedmedia-desc-link' => 'Om denne fil',
	'timedmedia-oggThumb-version' => 'OggHandler kræver oggThumb version  $1  eller nyere.',
	'timedmedia-oggThumb-failed' => 'oggThumb kunne ikke oprette et miniaturebillede.',
	'timedmedia-status-header' => 'Transcode status',
	'timedmedia-update-status' => 'Opdater transcode status',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Ukendt status',
	'timedmedia-transcodeinfo' => 'Afledt transcode beskrivelse',
	'timedmedia-actions' => 'Handlinger',
	'timedmedia-direct-link' => 'Hent derivat',
	'timedmedia-not-ready' => 'Ikke klar',
	'timedmedia-completed-on' => 'Gennemført transcode $1',
	'timedmedia-error-on' => 'Fejl i omkodning ved $1',
	'timedmedia-started-transcode' => 'Kode startet $1 siden. $2',
	'timedmedia-percent-done' => 'Cirka $1 % udført',
	'timedmedia-in-job-queue' => 'Føjet til jobkøen $1 siden',
	'timedmedia-unknown-target-size' => 'Ukendt mål størrelse, $1 kodet',
	'timedmedia-days' => '{{PLURAL:$1|$1 dag|$1 dage}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 time|$1 timer}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minut|$1 minutter}}',
	'timedmedia-seconds' => '{{PLURAL:$1|$1 sekund|$1 sekunder}}',
	'timedmedia-reset' => 'Nulstil transkode',
	'timedmedia-reset-confirm' => 'Nulstilling af denne omkodning vil fjerne alle eksisterende filer (hvis der er nogen), og vil genindsætte omkodningen i jobkøen. Det vil tage nogen tid at omkode forfra.<br /><br />
Er du sikker på, du vil fortsætte?',
	'timedmedia-reset-error' => 'Fejl ved nulstilling af kode job.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 kilde',
	'timedmedia-source-file-desc' => 'Original $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Original $1 file ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Lav båndbredde Ogg video (160 P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Web streambar Ogg video (360 P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Web streambar Ogg video (480 P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Højkvalitets hentbar Ogg video (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Web streambar WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Web streambar WebM (360 P)',
	'timedmedia-derivative-desc-480p.webm' => 'Web streambar WebM (480 P)',
	'timedmedia-derivative-desc-720p.webm' => 'Højkvalitets hentbar WebM (720 P)',
	'timedmedia-derivative-desc-320p.mp4' => 'enhedsvenlig MP4 (320 P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Web streambar MP4 (480 P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD-kvalitet MP4 (720 P)',
	'timedmedia-subtitle-new' => 'Opret nye oversættelse eller rediger eksisterende',
	'timedmedia-subtitle-new-desc' => "Vælg sprog og tryk på '''{{int:Timedmedia-undertitlen-ny-gå}}'' ' knappen",
	'timedmedia-subtitle-new-go' => 'Kør',
	'timedmedia-subtitle-language' => '$1( $2 ) undertekster',
	'timedmedia-subtitle-no-video' => 'Der er ingen video tilknyttet den aktuelle undertitel side',
	'timedmedia-subtitle-no-subtitles' => 'Der er i øjeblikket ingen undertekster i $1 denne video du kan [{{fullurl: {{FULLPAGENAME}} |action = Rediger}} redigere denne side] for at tilføje dem',
	'timedmedia-subtitle-remote' => 'Tidsbestemte tekst for denne fil er placeret på $1',
	'timedmedia-subtitle-remote-link' => 'Du kan [$1 se beskrivelses siden] til denne fil på $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videoer}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg video|$1 Ogg videoer}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM video|$1 WebM videoer}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transkode|$1 transkoder}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 kørende transcode|$1 kørende transcodes}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transkode i kø|$1 transkoder i kø}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transkode mislykket|$1 transkoder mislykkedes}}',
	'timedmedia-file' => 'Fil',
	'right-transcode-reset' => 'Nulstil mislykkedes eller transkodede videoer så de er sat ind i jobkøen igen.',
	'right-transcode-status' => 'Vis [[Special:TimedMediaHandler|information om den aktuelle omkodningsaktivitet]]',
	'action-transcode-status' => 'få vist den aktuelle transkode status',
);

/** German (Deutsch)
 * @author Filzstift
 * @author G.Hagedorn
 * @author Geitost
 * @author Kghbln
 * @author Leithian
 * @author Les Meloures
 * @author Metalhead64
 * @author MichaelFrey
 * @author Raimond Spekking
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de'] = array(
	'timedmedia-desc' => 'Stellt ein Steuerungsprogramm für zeitgesteuerte Medien (Video, Audio, timedText) bereit, welches die Formate WebM, Ogg Theora, Ogg Vorbis und SubRip unterstützt',
	'timedmedia-ogg-short-audio' => 'Ogg-$1-Audiodatei, $2',
	'timedmedia-ogg-short-video' => 'Ogg-$1-Videodatei, $2',
	'timedmedia-ogg-short-general' => 'Ogg-$1-Mediadatei, $2',
	'timedmedia-ogg-long-audio' => 'Ogg-$1-Audiodatei, Länge: $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg-$1-Videodatei, Länge: $2, $4×$5 Pixel, $3 insgesamt',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-Audio-/Video-Datei, $1, Länge: $2, $4×$5 Pixel, $3 insgesamt',
	'timedmedia-ogg-long-general' => 'Ogg-Mediadatei, Länge: $2, $3',
	'timedmedia-ogg-long-error' => 'Ungültige Ogg-Datei: $1',
	'timedmedia-webm-short-video' => 'WebM-$1-Videodatei, $2',
	'timedmedia-webm-long-video' => 'WebM-Audio-/Video-Datei, $1, Länge: $2, $4×$5 Pixel, $3 insgesamt',
	'timedmedia-flac-short-audio' => 'FLAC-Audiodatei, $1',
	'timedmedia-flac-long-audio' => 'FLAC-Audiodatei, Länge: $1, $2 insgesamt',
	'timedmedia-wav-short-audio' => 'WAV-Audiodatei, $1',
	'timedmedia-wav-long-audio' => 'WAV-Audiodatei, Länge: $1, $2 insgesamt',
	'timedmedia-wav-pcm-required' => 'Du kannst nur PCM-WAV-Dateien hochladen (Pulse Code Modulation).',
	'timedmedia-mp4-short-video' => 'MP4-$1-Videodatei, $2',
	'timedmedia-mp4-long-video' => 'MP4-Audio-/Video-Datei, $1, Länge $2, $4 × $5 Pixel, $3 insgesamt',
	'timedmedia-no-player-js' => 'Entschuldige, aber dein Browser hat entweder JavaScript deaktiviert oder keine unterstützte Abspielsoftware.<br />
Du kannst <a href="$1">den Clip herunterladen</a> oder <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">eine Abspielsoftware herunterladen</a>, um den Clip im Browser abzuspielen.',
	'timedmedia-more' => 'Optionen …',
	'timedmedia-dismiss' => 'Schließen',
	'timedmedia-download' => 'Datei herunterladen',
	'timedmedia-play-media' => 'Mediendatei abspielen',
	'timedmedia-desc-link' => 'Über diese Datei',
	'timedmedia-oggThumb-version' => 'OggHandler erfordert oggThumb in der Version $1 oder höher.',
	'timedmedia-oggThumb-failed' => 'oggThumb konnte kein Miniaturbild erstellen.',
	'timedmedia-status-header' => 'Transkodierungstatus',
	'timedmedia-update-status' => 'Transkodierungstatus aktualisieren',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Unbekannter Status',
	'timedmedia-transcodeinfo' => 'Beschreibung',
	'timedmedia-actions' => 'Aktionen',
	'timedmedia-direct-link' => 'Formatvariante herunterladen',
	'timedmedia-not-ready' => 'Nicht bereit',
	'timedmedia-completed-on' => 'Umschlüsselung abgeschlossen um $1',
	'timedmedia-error-on' => 'Fehler beim Umschlüsseln um $1',
	'timedmedia-started-transcode' => 'Umschlüsselung startete vor $1. $2',
	'timedmedia-percent-done' => 'Ungefähr $1 % sind erledigt',
	'timedmedia-in-job-queue' => 'Vor $1 der Auftragswarteschlange hinzugefügt',
	'timedmedia-unknown-target-size' => 'Unbekannte Zielgröße, $1 codiert',
	'timedmedia-days' => '{{PLURAL:$1|1 Tag|$1 Tagen}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 Stunde|$1 Stunden}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 Minute|$1 Minuten}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 Sekunde|$1 Sekunden}}',
	'timedmedia-reset' => 'Umschlüsselung zurücksetzen',
	'timedmedia-reset-confirm' => 'Das Zurücksetzen dieser Umschlüsselung wird, sofern vorhanden, die bestehende Datei entfernen und die Umschlüsselung erneut der Auftragswarteschlange hinzufügen. Die erneute Umschlüsselung wird einige Zeit dauern.<br /><br />Soll dies tatsächlich gemacht werden?',
	'timedmedia-reset-error' => 'Fehler beim Zurücksetzen der Umschlüsselung',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Quelle ($1)',
	'timedmedia-source-file-desc' => 'Original $1-Datei, $2 x $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Original $1-Datei ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg (160p)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg-Videodatei mit niedriger Datenübertragungsrate (160p)',
	'timedmedia-derivative-desc-360p.ogv' => 'Webstreamingfähige Ogg-Videodatei (360p)',
	'timedmedia-derivative-desc-480p.ogv' => 'Webstreamingfähige Ogg-Videodatei (480p)',
	'timedmedia-derivative-desc-720p.ogv' => 'Qualitativ hochwertige Ogg-Videodatei (720p)',
	'timedmedia-derivative-desc-160p.webm' => 'Webstreamingfähige WebM-Videodatei (160p)',
	'timedmedia-derivative-desc-360p.webm' => 'Webstreamingfähige WebM-Videodatei (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'Webstreamingfähige WebM-Videodatei (480p)',
	'timedmedia-derivative-desc-720p.webm' => 'Qualitativ hochwertige WebM-Videodatei (720p)',
	'timedmedia-derivative-desc-320p.mp4' => 'Gerätefreundliche MP4-Datei (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Webstreamingfähige MP4-Datei (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4-Datei in HD-Qualität (720P)',
	'timedmedia-subtitle-new' => 'Neue Übersetzung erstellen oder vorhandene bearbeiten',
	'timedmedia-subtitle-new-desc' => "Wähle eine Sprache aus und klicke auf '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Los',
	'timedmedia-subtitle-language' => '$1 ($2) Untertitel',
	'timedmedia-subtitle-no-video' => 'Der aktuellen Seite mit Untertiteln ist kein Video zugeordnet.',
	'timedmedia-subtitle-no-subtitles' => 'Derzeit gibt es keine Untertitel auf $1 für dieses Video. Zum Hinzufügen von Untertiteln kann [{{fullurl:{{FULLPAGENAME}}|action=edit}} diese Seite] bearbeitet werden.',
	'timedmedia-subtitle-remote' => 'timedText für diese Datei befindet sich auf $1',
	'timedmedia-subtitle-remote-link' => 'Du kannst [$1 die Beschreibungsseite] für diese Datei auf $2 ansehen',
	'timedmediahandler' => 'Steuerungsprogramm für zeitgesteuerte Medien',
	'timedmedia-videos' => '{{PLURAL:$1|Ein Video|$1 Videos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|Ein Ogg-Video|$1 Ogg-Videos}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|Ein WebM-Video|$1 WebM-Videos}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|Eine Umschlüsselung|$1 Umschlüsselungen}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|Eine laufende Umschlüsselung|$1 laufende Umschlüsselungen}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|Eine Umschlüsselung|$1 Umschlüsselungen}} in der Warteschlange',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|Eine fehlgeschlagene Umschlüsselung|$1 fehlgeschlagene Umschlüsselungen}}',
	'timedmedia-file' => 'Datei',
	'right-transcode-reset' => 'Fehlgeschlagene oder erfolgreiche Umschlüsselungen von Video-Dateien zurücksetzen, um sie erneut in die Auftragswarteschlange einzureihen',
	'right-transcode-status' => '[[Special:TimedMediaHandler|Informationen über aktuelle Umschlüsselungen]] betrachten',
	'action-transcode-status' => 'den aktuellen Transkodierungstatus anzusehen',
);

/** Zazaki (Zazaki)
 * @author Aspar
 * @author Erdemaslancan
 * @author Gorizon
 * @author Mirzali
 * @author Xoser
 */
$messages['diq'] = array(
	'timedmedia-desc' => 'Qen dê dosyayan dê WebM, Ogg Theora, Vorbis, srt rêxo desti veng dekerdış u nuşte ronayış',
	'timedmedia-ogg-short-audio' => 'Ogg $1 dosyaya vengi, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 dosyaya filmi, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 dosyaya medyayi, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 dosyaya medyayi,  mudde $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 dosyaya filmi, mudde $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg dosyaya filmi/vengi yo multiexed, $1, mudde $2, $4×$5 piksel, $3 bıumumi',
	'timedmedia-ogg-long-general' => 'Ogg dosyaya medyayi, mudde $2, $3',
	'timedmedia-ogg-long-error' => 'dosyaya oggi yo nemeqbul: $1',
	'timedmedia-more' => 'hema....',
	'timedmedia-dismiss' => 'Racnê',
	'timedmedia-download' => 'dosya biyar war',
	'timedmedia-play-media' => 'Medya bıcıne',
	'timedmedia-desc-link' => 'derheqê dosyayi de',
	'timedmedia-status' => 'Weziyet',
	'timedmedia-actions' => 'Kerdışi',
	'timedmedia-days' => '{{PLURAL:$1|1 roce|$1 roci}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 seate|$1 seati}}',
	'timedmedia-minutes' => '{{PLURAL: $1|1 deqa|$1 deqey}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 saniya|$1 saniyey}}',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-subtitle-new-go' => 'Şo',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'timedmedia-desc' => 'Wóźeński program za awdio, wideo a timedText, z formatoweju pódpěru za WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 awdiodataja, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 wideodataja, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 medijowa dataja, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 awdiodataja, dłujkosć $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 wideodataja, dłujkosć $2, $4×$5 pikselow, $3',
	'timedmedia-ogg-long-multiplexed' => 'ogg multipleksowa awdio-/wideodataja, $1, dłujkosć $2, $4×$5 pikselow, $3 dogromady',
	'timedmedia-ogg-long-general' => 'Ogg medijowa dataja, dłujkosć $2, $3',
	'timedmedia-ogg-long-error' => 'Njepłaśiwa Ogg-dataja: $1',
	'timedmedia-webm-short-video' => 'WebM $1 wideodataja, $2',
	'timedmedia-webm-long-video' => 'WebM dataja awdio/wideo, $1, dłujkosć $2, $4 x $5, $3 dogromady',
	'timedmedia-no-player-js' => 'Twój wobglědowak jo bóžko pak JavaScript znjemóžnił abo njama njepódpěrany wótegrawak.<br />
Móžoš  <a href="$1">klip ześěgnuś</a> abo <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">wótgrawak ześěgnuś</a>, aby klip w swójom wobglědowaku wótegrał.',
	'timedmedia-more' => 'Wěcej...',
	'timedmedia-dismiss' => 'Zacyniś',
	'timedmedia-download' => 'Dataju ześěgnuś',
	'timedmedia-play-media' => 'Medijowu dataju wótegraś',
	'timedmedia-desc-link' => 'Wó toś tej dataji',
	'timedmedia-oggThumb-version' => 'OggHandler trjeba wersiju $1 oggThumb abo nowšu.',
	'timedmedia-oggThumb-failed' => 'oggThumb njejo mógł wobrazk napóraś.',
	'timedmedia-source-file' => 'Žrědło ($1)',
	'timedmedia-source-file-desc' => 'Originalna $1-dataja, $2 × $3 ($4)',
	'timedmedia-derivative-desc-160p.ogv' => 'Niska šyrokosć pasma Ogg-widea (200p)',
	'timedmedia-subtitle-language' => '$1 ($2) pódtitele',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Dead3y3
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'timedmedia-desc' => 'Χειριστής για αρχεία Ogg Theora και Vorbis, με αναπαραγωγέα JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Αρχείο ήχου Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Αρχείο βίντεο Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Αρχείο μέσων Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Αρχείο ήχου Ogg $1, διάρκεια $2, $3',
	'timedmedia-ogg-long-video' => 'Αρχείο βίντεο Ogg $1, διάρκεια $2, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Αρχείο πολυπλεκτικού ήχου/βίντεο Ogg, $1, διάρκεια $2, $4×$5 pixels, $3 ολικά',
	'timedmedia-ogg-long-general' => 'Αρχείο μέσων Ogg, διάρκεια $2, $3',
	'timedmedia-ogg-long-error' => 'Άκυρο αρχείο ogg: $1',
	'timedmedia-more' => 'Περισσότερα...',
	'timedmedia-dismiss' => 'Κλείσιμο',
	'timedmedia-download' => 'Κατεβάστε το αρχείο',
	'timedmedia-desc-link' => 'Σχετικά με αυτό το αρχείο',
);

/** Esperanto (Esperanto)
 * @author Amikeco
 * @author ArnoLagrange
 * @author Yekrats
 */
$messages['eo'] = array(
	'timedmedia-desc' => 'Traktilo por sondosieroj, videoj, kaj horloĝigita teksto, kun formatsubteno por WebM kaj Ogg Theora kaj Vobis kaj srt.',
	'timedmedia-ogg-short-audio' => 'Ogg $1 sondosiero, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videodosiero, $2',
	'timedmedia-ogg-short-general' => 'Media Ogg-dosiero $1, $2',
	'timedmedia-ogg-long-audio' => 'Aŭda Ogg-dosiero $1, longeco $2, $3 entute',
	'timedmedia-ogg-long-video' => 'Video Ogg-dosiero $1, longeco $2, $4×$5 pikseloj, $3 entute',
	'timedmedia-ogg-long-multiplexed' => 'Kunigita aŭdio/video Ogg-dosiero, $1, longeco $2, $4×$5 pikseloj, $3 entute',
	'timedmedia-ogg-long-general' => 'Ogg-mediodosiero, longeco $2, $3',
	'timedmedia-ogg-long-error' => 'Malvalida Ogg-dosiero: $1',
	'timedmedia-more' => 'Pli...',
	'timedmedia-dismiss' => 'Fermi',
	'timedmedia-download' => 'Alŝuti dosieron',
	'timedmedia-desc-link' => 'Pri ĉi tiu dosiero',
);

/** Spanish (español)
 * @author Aleator
 * @author Armando-Martin
 * @author Crazymadlover
 * @author Jewbask
 * @author Maor X
 * @author Muro de Aguas
 * @author Remember the dot
 * @author Rodrigo Molinero
 * @author Rzuwig
 * @author Sanbec
 * @author Spacebirdy
 * @author Translationista
 */
$messages['es'] = array(
	'timedmedia-desc' => 'Manipulador de sonido, vídeo y texto sincronizado, con soporte para los formatos WebM, Ogg Theora, Vorbis y srt',
	'timedmedia-ogg-short-audio' => 'Archivo de sonido Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Archivo de video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Archivo Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Archivo de sonido Ogg $1, tamaño $2, $3',
	'timedmedia-ogg-long-video' => 'Archivo de video Ogg $1, tamaño $2, $4×$5 píxeles, $3',
	'timedmedia-ogg-long-multiplexed' => 'Archivo Ogg de audio/video multiplexado, $1, tamaño $2, $4×$5 píxeles, $3 en todo',
	'timedmedia-ogg-long-general' => 'Archivo Ogg. tamaño $2, $3',
	'timedmedia-ogg-long-error' => 'Archivo Ogg no válido: $1',
	'timedmedia-webm-short-video' => 'Archivo de vídeo WebM $1, $2',
	'timedmedia-webm-long-video' => 'Archivo de audio/vídeo WebM,  $1 , longitud  $2 ,  $4  ×  $5  píxeles,  $3  total',
	'timedmedia-mp4-short-video' => 'Archivo de vídeo MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'Archivo de audio/vídeo MP4,  $1 , longitud  $2 ,  $4  ×  $5  píxeles,  $3  total',
	'timedmedia-no-player-js' => 'Lo sentimos, pero tu navegador tiene JavaScript inhabilitado o no tiene ningún reproductor compatible instalado.<br />
Puedes <a href="$1">descargar el clip</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">descargar un reproductor</a> para poder ver el vídeo en tu navegador.',
	'timedmedia-more' => 'Opciones...',
	'timedmedia-dismiss' => 'Cerrar',
	'timedmedia-download' => 'Descargar archivo',
	'timedmedia-play-media' => 'Reproducir contenido multimedia',
	'timedmedia-desc-link' => 'Sobre este archivo',
	'timedmedia-oggThumb-version' => 'OggHandler requiere una versión oggThumb $1 o posterior.',
	'timedmedia-oggThumb-failed' => 'oggThumb no pudo crear la imagen miniatura.',
	'timedmedia-status-header' => 'Estado de transcodificación',
	'timedmedia-update-status' => 'Actualizar el estado de transcodificación',
	'timedmedia-status' => 'Estado',
	'timedmedia-status-unknown' => 'Estado desconocido',
	'timedmedia-transcodeinfo' => 'Descripción derivada de transcodificación',
	'timedmedia-actions' => 'Acciones',
	'timedmedia-direct-link' => 'Descargar el derivado',
	'timedmedia-not-ready' => 'No está listo',
	'timedmedia-completed-on' => 'Transcodificación completada $1',
	'timedmedia-error-on' => 'Error en la transcodificación en  $1 .', # Fuzzy
	'timedmedia-started-transcode' => 'Transcodificación comenzada hace  $1. $2',
	'timedmedia-percent-done' => 'Aproximadamente $1 % completado',
	'timedmedia-in-job-queue' => 'Añadido a la cola de trabajos hace  $1',
	'timedmedia-unknown-target-size' => 'Tamaño de archivo de destino desconocido,  $1 codificado',
	'timedmedia-days' => '{{PLURAL:$1|día|$1 días}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hora|$1 horas}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segundo|$1 segundos}}',
	'timedmedia-reset' => 'Reiniciar la transcodificación',
	'timedmedia-reset-confirm' => 'Restablecer esta transcodificación eliminará cualquier archivo existente (si existe), y volverá a añadir la transcodificación a la cola de trabajos. Llevará algún tiempo repetir la transcodificación.<br /><br />
¿Está seguro de que desea continuar?',
	'timedmedia-reset-error' => 'Error al restablecer el trabajo de transcodificación.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Fuente $1',
	'timedmedia-source-file-desc' => 'Original $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Video en formato Ogg de bajo ancho de banda (160 P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Vídeo Ogg para la web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Vídeo Ogg para la web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Vídeo Ogg de alta calidad que se puede descargar (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM para la web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM para la web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM para la web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM de alta calidad que se puede descargar (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 para dispositivos móviles (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 para la web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 de calidad HD (720P)',
	'timedmedia-subtitle-new' => 'Crear una nueva traducción o editar una existente',
	'timedmedia-subtitle-new-desc' => "Reemplaza la parte '''LANG'' con su [[:en:ISO 639|código de idioma]] y presiona el botón '''{{int:Timedmedia-subtitle-new-go}}'''", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Ir',
	'timedmedia-subtitle-language' => 'Subtítulos en $1 ($2)',
	'timedmedia-subtitle-no-video' => 'No hay ningún video asociado con la página actual de subtítulos',
	'timedmedia-subtitle-no-subtitles' => 'Actualmente no hay subtítulos en  $1  para este video, puede [{{fullurl: {{FULLPAGENAME}} |action = edit}} editar esta página] para agregarlos',
	'timedmedia-subtitle-remote' => 'El texto programado para este archivo está alojado en $1',
	'timedmedia-subtitle-remote-link' => 'Puedes [$1 ver la página de descripción] de este archivo en $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 vídeo|$1 vídeos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 vídeo Ogg|$1 vídeos Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 vídeo WebM|$1 vídeos WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodificación|$1 transcodificaciones}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodificación activa|$1 transcodificaciones activas}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transcodificación|$1 transcodificaciones}} en la cola',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodificación fallida|$1 transcodificaciones fallidas}}',
	'timedmedia-file' => 'Archivo',
	'right-transcode-reset' => 'Reiniciar los vídeos erróneos o transcodificados por lo que se vuelven a colocar en la cola de trabajo',
	'right-transcode-status' => 'Ver [[Special:TimedMediaHandler|información sobre la actividad de transcodificación actual]]',
	'action-transcode-status' => 'ver el estado de transcodificación actual',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 * @author Silvar
 */
$messages['et'] = array(
	'timedmedia-desc' => 'WebM-, srt- ning Theora- ja Vorbis-tüüpi Ogg-vormingu toega heli-, video- ja ajastatud teksti käsitseja',
	'timedmedia-ogg-short-audio' => '$1-tüüpi Ogg-helifail, $2',
	'timedmedia-ogg-short-video' => '$1-tüüpi Ogg-videofail, $2',
	'timedmedia-ogg-short-general' => '$1-tüüpi Ogg-fail, $2',
	'timedmedia-ogg-long-audio' => '$1-tüüpi Ogg-helifail, kestus: $2, $3',
	'timedmedia-ogg-long-video' => '$1-tüüpi Ogg-videofail, kestus: $2, $4×$5 pikslit, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-liitfail (heli ja video), $1, kestus: $2, $4×$5 pikslit, üldbitikiirus: $3',
	'timedmedia-ogg-long-general' => 'Ogg-fail, kestus: $2, $3',
	'timedmedia-ogg-long-error' => 'Vigane Ogg-fail: $1',
	'timedmedia-webm-short-video' => '$1-tüüpi WebM-videofail, $2',
	'timedmedia-webm-long-video' => 'WebM-fail (heli ja video), $1, kestus: $2, $4×$5 pikslit, üldbitikiirus: $3',
	'timedmedia-mp4-short-video' => '$1-tüüpi MP4-videofail, $2',
	'timedmedia-mp4-long-video' => 'MP4-fail (heli ja video), $1, kestus: $2, $4×$5 pikslit, üldbitikiirus: $3',
	'timedmedia-more' => 'Lisa...',
	'timedmedia-dismiss' => 'Sule',
	'timedmedia-download' => 'Laadi fail alla',
	'timedmedia-desc-link' => 'Info faili kohta',
	'timedmedia-oggThumb-version' => 'OggHandleri jaoks on vaja oggThumbi versiooni $1 või hilisemat.',
	'timedmedia-oggThumb-failed' => 'oggThumb ei saanud pisipildi loomisega hakkama.',
	'timedmedia-status' => 'Olek',
	'timedmedia-status-unknown' => 'Tundmatu olek',
	'timedmedia-actions' => 'Toimingud',
	'timedmedia-not-ready' => 'Ei ole valmis',
	'timedmedia-percent-done' => 'Umbes $1% valmis',
	'timedmedia-in-job-queue' => 'Lisatud tööjärge $1 tagasi',
	'timedmedia-days' => '{{PLURAL:$1|1 päev|$1 päeva}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 tund|$1 tundi}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minut|$1 minutit}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 sekund|$1 sekundit}}',
	'timedmedia-source-file' => 'Allikas ($1)',
	'timedmedia-source-file-desc' => 'Algne $1-fail, $2 × $3 ($4)',
	'timedmedia-derivative-desc-360p.ogv' => 'Võrgus voogedastatav Ogg-video (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Võrgus voogedastatav Ogg-video (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Kõrge kvaliteediga allalaaditav Ogg-video (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Võrgus voogedastatav WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Võrgus voogedastatav WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Võrgus voogedastatav WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Kõrge kvaliteediga allalaaditav WebM (720P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Võrgus voogedastatav MP4 (480P)',
	'timedmedia-subtitle-new' => 'Uue tõlkega alustamine või olemasoleva muutmine',
	'timedmedia-subtitle-new-desc' => "Vali keel ja klõpsa nuppu '''{{int:Timedmedia-subtitle-new-go}}'''.",
	'timedmedia-subtitle-new-go' => 'Mine',
	'timedmedia-subtitle-language' => '$1 ($2) alltiitrid',
	'timedmedia-subtitle-no-video' => 'Puudub selle alltiitrite leheküljega seotud video.',
	'timedmedia-subtitle-no-subtitles' => 'Selle video alltiitrid puuduvad praegu selles keeles ($1). Saad seda lehekülge [{{fullurl:{{FULLPAGENAME}}|action=edit}} redigeerida], et need lisada.',
	'timedmedia-subtitle-remote' => 'Selle faili ajastatud tekst on hoidlas $1',
	'timedmedia-subtitle-remote-link' => 'Selle faili [$1 kirjelduslehekülge] saad vaadata hoidlas $2.',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videot}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg-video|$1 Ogg-videot}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM-video|$1 WebM-videot}}',
	'timedmedia-file' => 'Fail',
);

/** Basque (euskara)
 * @author An13sa
 * @author Joxemai
 * @author Theklan
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'timedmedia-desc' => 'Ogg Theora eta Vorbis fitxategientzako edukiontzia, JavaScript playerrarekin', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 soinu fitxategia, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 bideo fitxategia, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 media fitxategia, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 soinu fitxategia, $2 iraupea, $3',
	'timedmedia-ogg-long-error' => 'ogg fitxategi okerra: $1',
	'timedmedia-more' => 'Gehiago...',
	'timedmedia-dismiss' => 'Itxi',
	'timedmedia-download' => 'Fitxategia jaitsi',
	'timedmedia-desc-link' => 'Fitxategi honen inguruan',
	'timedmedia-status' => 'Egoera',
	'timedmedia-subtitle-new-go' => 'Joan',
	'timedmedia-file' => 'Fitxategia',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Calak
 * @author Ebraminio
 * @author Huji
 * @author Mahdiz
 * @author Mjbmr
 * @author Reza1615
 * @author جواد
 * @author پاناروما
 */
$messages['fa'] = array(
	'timedmedia-desc' => 'به دست گیرندهٔ پرونده‌های صوتی، تصویری و متن‌های زمان‌بندی شده با پشتیبانی از Ogg Theora ،Vorbis و srt',
	'timedmedia-ogg-short-audio' => 'پرونده صوتی Ogg $1، $2',
	'timedmedia-ogg-short-video' => 'پرونده تصویری Ogg $1، $2',
	'timedmedia-ogg-short-general' => 'پرونده Ogg $1، $2',
	'timedmedia-ogg-long-audio' => 'پرونده صوتی Ogg $1، مدت $2، $3',
	'timedmedia-ogg-long-video' => 'پرونده تصویری Ogg $1، مدت $2 ، $4×$5 پیکسل، $3',
	'timedmedia-ogg-long-multiplexed' => 'پرونده صوتی/تصویری پیچیده Ogg، $1، مدت $2، $4×$5 پیکسل، $3 در مجموع',
	'timedmedia-ogg-long-general' => 'پرونده Ogg، مدت $2، $3',
	'timedmedia-ogg-long-error' => 'پروندهٔ Ogg نامجاز: $1',
	'timedmedia-webm-short-video' => 'رسانهٔ وب  $1 پروندهٔ ویدئویی، $2',
	'timedmedia-webm-long-video' => 'رسانهٔ وب پروندهٔ صوتی/تصویری، $1، مدت $2، $4 × $5 پیکسل، $3 کلی',
	'timedmedia-flac-short-audio' => 'پروندهٔ صوتی اف‌ال‌ای‌سی، $1',
	'timedmedia-flac-long-audio' => 'پروندهٔ صوتی اف‌ال‌ای‌سی، مدت $1، $2 کلی',
	'timedmedia-wav-short-audio' => 'پروندهٔ صوتی WAV، $1',
	'timedmedia-wav-long-audio' => 'پروندهٔ صوتی WAV، مدت $1، $2 کلی',
	'timedmedia-wav-pcm-required' => 'شما فقط می توانید PCM و WAV را بار کنید.',
	'timedmedia-mp4-short-video' => 'MP4  $1 پروندهٔ ویدئویی، $2',
	'timedmedia-mp4-long-video' => 'فایل های صوتی یا تصویری با فرمت $1، زمان $2، $4 × $5 پیکسل و $3 به طورکلی',
	'timedmedia-no-player-js' => 'با عرض پوزش، نرم افزار جاوا اسکریپت برروی مرورگر شما فعال نیست، و یا مرورگر شما از این نرم افزار پشتیبانی نمی کند.<br />
شما میتوانید <a href="$1">این ویدیو را دانلود</a> و یا <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">یک پخش کننده</a> برای اجرای این ویدیو دانلود نمایید.',
	'timedmedia-more' => 'بیشتر...',
	'timedmedia-dismiss' => 'بستن',
	'timedmedia-download' => 'بارگیری پرونده',
	'timedmedia-play-media' => 'پخش رسانه',
	'timedmedia-desc-link' => 'دربارهٔ این پرونده',
	'timedmedia-oggThumb-version' => 'نگهدارندهٔ Ogg به بند‌انگشتی Ogg نسخهٔ  $1 یا بالاتر نیاز دارد.',
	'timedmedia-oggThumb-failed' => 'بندانگشتی Ogg در ساخت بندانگشتی با خطا مواجه شد.',
	'timedmedia-status-header' => 'وضعیت فراکد',
	'timedmedia-update-status' => 'وضعیت به‌روزرسانی فراکد',
	'timedmedia-status' => 'وضعیت',
	'timedmedia-status-unknown' => 'وضعیت ناشناخته',
	'timedmedia-transcodeinfo' => 'توضیحات اشتقاقی فراکد',
	'timedmedia-actions' => 'فعالیت‌ها',
	'timedmedia-direct-link' => 'بارگیری اشتقاقی',
	'timedmedia-not-ready' => 'آماده نیست',
	'timedmedia-completed-on' => 'تکمیل فراکد $1',
	'timedmedia-error-on' => 'خطا در فراکد در $1',
	'timedmedia-started-transcode' => 'فراکد $1 پیش آغاز شد. $2',
	'timedmedia-percent-done' => 'حدود $1% انجام شده',
	'timedmedia-in-job-queue' => 'اضافه‌شد به صف کار  $1  پیش',
	'timedmedia-unknown-target-size' => 'اندازهٔ هدف ناشناخته، $1 رمزی',
	'timedmedia-days' => '{{PLURAL:$1|1 روز|$1 روز}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 ساعت|$1 ساعت}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 دقیقه|$1 دقیقه}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 ثانیه|$1 ثانیه}}',
	'timedmedia-reset' => 'تنظیم مجدد فراکد',
	'timedmedia-reset-confirm' => 'تنظیم مجدد فراکد پرونده‌های موجود را حذف خواهد کرد و فراکد را در صف کار خواهد افزود. این کار مقداری زمان لازم دارد.<br /><br />
آیا می‌خواهید ادامه دهید؟',
	'timedmedia-reset-error' => 'خطا در بازنشانی کار فراکد.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 مبدأ',
	'timedmedia-source-file-desc' => 'اصلی $1 پرونده، $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'اصلی  $1  پرونده ( $2 )',
	'timedmedia-derivative-desc-160p.ogv' => 'ویدئو Ogg با پهنای باند کم (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'ویدئو Ogg با پهنای وب (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'ویدئو Ogg با پهنای وب (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'ویدئو Ogg قابل بارگیری با کیفیت بالا (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'رسانه وب با پهنای وب (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'رسانه وب با پهنای وب (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'رسانه وب با پهنای وب (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'رسانه وب قابل بارگیری با کیفیت بالا (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'ابزار سازگار با MP4  (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'پهنای وب  MP4  (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'کیفیت بالا  MP4  (720P)',
	'timedmedia-subtitle-new' => 'ترجمه جدیدی را ایجاد کنید یا در صورت وجود آن را ویرایش کنید.',
	'timedmedia-subtitle-new-desc' => " زبان را انتخاب کنید و دکمهٔ '''{{int:Timedmedia-subtitle-new-go}}''' را بفشارید",
	'timedmedia-subtitle-new-go' => 'برو',
	'timedmedia-subtitle-language' => '$1 ($2) زیرنویس‌ها',
	'timedmedia-subtitle-no-video' => 'هیچ ویدئویی مرتبط با زیرعنوان این صفحه موجود نیست',
	'timedmedia-subtitle-no-subtitles' => 'این فیلم درحال حاضر بدون زیرنویس است($1). شما میتوانید با [{{fullurl:{{FULLPAGENAME}}|action=edit}} ویرایش این صفحه] آن را بیافزایید.',
	'timedmedia-subtitle-remote' => 'متن زمان‌دار برای پرونده ذخیره شده در $1',
	'timedmedia-subtitle-remote-link' => 'شما می توانید [$1 توضیحات صفحه مشاهده کنید] برای این پرونده در $2',
	'timedmediahandler' => 'هدایت‌کننده رسانهٔ زمان‌دار',
	'timedmedia-videos' => '{{PLURAL:$1|$1 ویدئو|$1 ویدئو}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 ویدئو Ogg|$1 ویدئو  Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 ویدئو WebM|$1 ویدئو  WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 فراکدها|$1 فراکدها}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 درحال اجرای فراکدها|$1 در حال اجرای فراکدها}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 صف فراکدها|$1 صف فراکدها}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 فراکدهای اشتباه|$1 فراکدهای اشتباه}}',
	'timedmedia-file' => 'پرونده',
	'right-transcode-reset' => 'تنظیم مجدد انجام‌نشده‌ها یا ویدئوهای فراکدشده اعمال شد. در نتیجه مجدداً آنها در صف کار قرار گرفتند.',
	'right-transcode-status' => 'مشاهدهٔ [[Special:TimedMediaHandler|اطلاعات در مورد فعالیت فراکد]]',
	'action-transcode-status' => 'نمایش وضعیت فراکدگذاری کنونی',
);

/** Finnish (suomi)
 * @author Agony
 * @author Beluga
 * @author Crt
 * @author Nike
 * @author Str4nd
 * @author VezonThunder
 */
$messages['fi'] = array(
	'timedmedia-desc' => 'Käsittelijä äänelle, videolle ja tekstitykselle. Tukee muotoja WebM, Ogg Theora, Vorbis ja srt.',
	'timedmedia-ogg-short-audio' => 'Ogg $1 -äänitiedosto, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 -videotiedosto, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 -mediatiedosto, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 -äänitiedosto, $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 -videotiedosto, $2, $4×$5, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-tiedosto limitetty kuva ja ääni, $1, $2, $4×$5, $3',
	'timedmedia-ogg-long-general' => 'Ogg-tiedosto, $2, $3',
	'timedmedia-ogg-long-error' => 'Kelvoton Ogg-tiedosto: $1',
	'timedmedia-webm-short-video' => 'WebM $1 -videotiedosto, $2',
	'timedmedia-webm-long-video' => 'WebM-ääni-/videotiedosto, $1, pituus $2, $4×$5 pikseliä, yhteensä $3',
	'timedmedia-mp4-short-video' => 'MP4 $1 -videotiedosto, $2',
	'timedmedia-mp4-long-video' => 'MP4-ääni-/videotiedosto, $1, pituus $2, $4×$5 pikseliä, yhteensä $3',
	'timedmedia-no-player-js' => 'Valitettavasti selaimessasi on joko JavaScript pois päältä tai sille ei ole tuettua soitinta.<br />
Voit <a href="$1">ladata leikkeen</a> tai <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">ladata soittimen</a> toistaaksesi sen selaimessasi.',
	'timedmedia-more' => 'Lisää…',
	'timedmedia-dismiss' => 'Sulje',
	'timedmedia-download' => 'Lataa',
	'timedmedia-play-media' => 'Toista mediaa',
	'timedmedia-desc-link' => 'Tiedoston tiedot',
	'timedmedia-oggThumb-version' => 'OggHandler vaatii oggThumbin version $1 tai uudemman.',
	'timedmedia-oggThumb-failed' => 'oggThumb epäonnistui pikkukuvan luomisessa.',
	'timedmedia-status' => 'Tila',
	'timedmedia-status-unknown' => 'Tuntematon tila',
	'timedmedia-actions' => 'Toiminnot',
	'timedmedia-not-ready' => 'Ei valmis',
	'timedmedia-percent-done' => 'Noin $1% valmiina',
	'timedmedia-in-job-queue' => 'Lisättiin työjonoon $1 sitten',
	'timedmedia-days' => '{{PLURAL:$1|1 päivä|$1 päivää}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 tunti|$1 tuntia}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuutti|$1 minuuttia}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 sekunti|$1 sekuntia}}',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Lähde $1',
	'timedmedia-source-file-desc' => 'Alkuperäinen $1-tiedosto, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Alkuperäinen $1-tiedosto ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Pienen kaistanleveyden Ogg-video (160p)',
	'timedmedia-derivative-desc-360p.ogv' => 'Verkossa suoratoistettava Ogg-video (360p)',
	'timedmedia-derivative-desc-480p.ogv' => 'Verkossa suoratoistettava Ogg-video (480p)',
	'timedmedia-derivative-desc-720p.ogv' => 'Korkealaatuinen ladattava Ogg-video (720p)',
	'timedmedia-derivative-desc-160p.webm' => 'Verkossa suoratoistettava WebM-video (160p)',
	'timedmedia-derivative-desc-360p.webm' => 'Verkossa suoratoistettava WebM-video (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'Verkossa suoratoistettava WebM-video (480p)',
	'timedmedia-derivative-desc-720p.webm' => 'Korkealaatuinen ladattava WebM-video (720p)',
	'timedmedia-derivative-desc-320p.mp4' => 'Laiteystävällinen MP4 (320p)',
	'timedmedia-derivative-desc-480p.mp4' => 'Verkossa suoratoistettava MP4 (480p)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD-laatuinen MP4 (720p)',
	'timedmedia-subtitle-new' => 'Luo uusi käännös tai muokkaa aiempaa',
	'timedmedia-subtitle-new-desc' => "Valitse kieli ja napsauta '''{{int:Timedmedia-subtitle-new-go}}'''.",
	'timedmedia-subtitle-new-go' => 'Siirry',
	'timedmedia-subtitle-language' => '$1 ($2) kuvatekstit',
	'timedmedia-subtitle-no-video' => 'Tähän tekstityssivuun ei liity videota',
	'timedmedia-subtitle-no-subtitles' => 'Tälle videolle ei tällä hetkellä ole tekstityksiä kielellä $1. Voit [{{fullurl:{{FULLPAGENAME}}|action=edit}} muokata tätä sivua] lisätäksesi ne.',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videota}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg-video|$1 Ogg-videota}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM-video|$1 WebM-videota}}',
	'timedmedia-file' => 'Tiedosto',
);

/** Faroese (føroyskt)
 * @author Spacebirdy
 */
$messages['fo'] = array(
	'timedmedia-more' => 'Meira...',
);

/** French (français)
 * @author Boniface
 * @author Brunoperel
 * @author Crochet.david
 * @author Erkethan
 * @author Gomoko
 * @author Grondin
 * @author Hashar
 * @author Hello71
 * @author IAlex
 * @author Jean-Frédéric
 * @author McDutchie
 * @author Od1n
 * @author Peter17
 * @author Rzuwig
 * @author Seb35
 * @author Sherbrooke
 * @author Shirayuki
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'timedmedia-desc' => 'Gestionnaire pour les vidéos, enregistrements sonores et textes synchronisés, avec le support des formats WebM, Ogg Theora, Vorbis et srt',
	'timedmedia-ogg-short-audio' => 'Fichier son Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Fichier vidéo Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Fichier média Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Fichier son Ogg $1, durée $2, $3',
	'timedmedia-ogg-long-video' => 'Fichier vidéo Ogg $1, durée $2, $4 × $5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Fichier multiplexé audio/vidéo Ogg, $1, durée $2, $4&nbsp;×&nbsp;$5 pixels, $3 au total',
	'timedmedia-ogg-long-general' => 'Fichier média Ogg, durée $2, $3',
	'timedmedia-ogg-long-error' => 'Fichier Ogg invalide : $1',
	'timedmedia-webm-short-video' => 'Fichier vidéo WebM $1, $2',
	'timedmedia-webm-long-video' => "Fichier audio/vidéo WebM, $1, longueur $2, $4 x $5 pixels, $3 l'ensemble",
	'timedmedia-flac-short-audio' => 'Fichier audio FLAC, $1',
	'timedmedia-flac-long-audio' => 'Fichier audio FLAC, durée $1, débit $2 sur l’ensemble',
	'timedmedia-wav-short-audio' => 'Fichier audio WAV, $1',
	'timedmedia-wav-long-audio' => 'Fichier audio WAV, durée $1, $2 sur l’ensemble',
	'timedmedia-wav-pcm-required' => 'Vous ne pouvez télécharger que des WAV PCM (Modulation d’impulsion codée).',
	'timedmedia-mp4-short-video' => 'Fichier vidéo MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'Fichier audio/vidéo MP4, $1, taille $2, $4 x $5 pixels, $3 au total',
	'timedmedia-no-player-js' => 'Désolé, soit votre navigateur a JavaScript désactivé, soit il ne dispose d’aucun lecteur pris en charge.<br />
Vous pouvez <a href="$1">télécharger le clip</a> ou <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">télécharger un lecteur</a> pour lire le clip dans votre navigateur.',
	'timedmedia-more' => 'Plus…',
	'timedmedia-dismiss' => 'Fermer',
	'timedmedia-download' => 'Télécharger le fichier',
	'timedmedia-play-media' => 'Lire le média',
	'timedmedia-desc-link' => 'À propos de ce fichier',
	'timedmedia-oggThumb-version' => 'OggHandler nécessite oggThumb, version $1 ou supérieure.',
	'timedmedia-oggThumb-failed' => 'oggThumb n’a pas réussi à créer la miniature.',
	'timedmedia-status-header' => 'Statut de transcodage',
	'timedmedia-update-status' => 'Mettre à jour le statut de transcodage',
	'timedmedia-status' => 'Statut',
	'timedmedia-status-unknown' => 'État inconnu',
	'timedmedia-transcodeinfo' => 'Description dérivée du transcodage',
	'timedmedia-actions' => 'Actions',
	'timedmedia-direct-link' => 'Télécharger le dérivé',
	'timedmedia-not-ready' => 'Pas prêt',
	'timedmedia-completed-on' => 'Transcodage de $1 terminé',
	'timedmedia-error-on' => 'Erreur dans le transcodage de $1',
	'timedmedia-started-transcode' => 'Transcodage démarré depuis $1. $2',
	'timedmedia-percent-done' => 'Environ $1 % complété',
	'timedmedia-in-job-queue' => 'Ajouté à la file d’attente des travaux il y a $1',
	'timedmedia-unknown-target-size' => 'Taille de la cible inconnue, $1 encodé',
	'timedmedia-days' => '{{PLURAL:$1|1 jour|$1 jours}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 heure|$1 heures}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minute|$1 minutes}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 seconde|$1 secondes}}',
	'timedmedia-reset' => 'Réinitialiser le transcodage',
	'timedmedia-reset-confirm' => 'Remettre à zéro ce transcodage supprimera tout fichier existant (s’il y en a) et ajoutera de nouveau le transcodage à la file de travaux. Cela prendra un certain temps pour être transcodé de nouveau. <br /><br />
Êtes-vous sûr de vouloir continuer ?',
	'timedmedia-reset-error' => 'Erreur en réinitialisant le travail de transcodage.',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Source $1',
	'timedmedia-source-file-desc' => 'Original fichier $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Fichier original $1 ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160p',
	'timedmedia-derivative-desc-160p.ogv' => 'Vidéo Ogg bas débit (160P)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360p',
	'timedmedia-derivative-desc-360p.ogv' => 'Vidéo Ogg lisible en continu sur le Web (360p)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480p',
	'timedmedia-derivative-desc-480p.ogv' => 'Vidéo Ogg lisible en continu sur le web (480p)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720p',
	'timedmedia-derivative-desc-720p.ogv' => 'Vidéo Ogg téléchargeable de grande qualité (720p)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM lisible en continu depuis le web (160p)',
	'timedmedia-derivative-360p.webm' => 'WebM 360p',
	'timedmedia-derivative-desc-360p.webm' => 'WebM lisible en continu depuis le web (360p)',
	'timedmedia-derivative-480p.webm' => 'WebM 480p',
	'timedmedia-derivative-desc-480p.webm' => 'WebM lisible en continu depuis le web (480p)',
	'timedmedia-derivative-720p.webm' => 'WebM 720p',
	'timedmedia-derivative-desc-720p.webm' => 'Vidéo WebM téléchargeable de grande qualité (720p)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 compatible matériel (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 pour flux web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 qualité HD (720P)',
	'timedmedia-subtitle-new' => 'Créer une nouvelle traduction ou modifier une traduction existante',
	'timedmedia-subtitle-new-desc' => "Sélectionnez la langue et appuyez sur le bouton '''{{int:Timedmedia-subtitle-new-go}}'''.",
	'timedmedia-subtitle-new-go' => 'Aller',
	'timedmedia-subtitle-language' => 'sous-titres en $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Il n’y a aucune vidéo associée à la page actuelle de sous-titre',
	'timedmedia-subtitle-no-subtitles' => 'Il n’y a actuellement aucun sous-titres en $1 pour cette vidéo, vous pouvez [{{fullurl: {{FULLPAGENAME}} | action=edit}} modifier cette page] pour les ajouter',
	'timedmedia-subtitle-remote' => 'Le texte prévu pour ce fichier est hébergé sur $1',
	'timedmedia-subtitle-remote-link' => 'Vous pouvez [$1 voir la page de description] de ce fichier sur $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 vidéo|$1 vidéos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 vidéo Ogg|$1 vidéos Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 vidéo WebM|$1 vidéos WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodage|$1 transcodages}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodage en cours|$1 transcodages en cours}}',
	'timedmedia-derivative-state-queued' => "{{PLURAL:$1|$1 transcodage en file d'attente|$1 transcodages en file d'attente}}",
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodage échoué|$1 transcodages échoués}}',
	'timedmedia-file' => 'Fichier',
	'right-transcode-reset' => 'Réinitialiser les vidéos en échec ou transcodées pour qu’elles soient de nouveau insérées dans la file des travaux',
	'right-transcode-status' => "Afficher [[Special:TimedMediaHandler|l'information sur l'activité de transcodage actuelle]]",
	'action-transcode-status' => 'afficher l’état de transcodage actuel',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'timedmedia-desc' => 'Assistance por los fichiérs mèdia que dèfilont (ôdiô, vidèô et tèxto sincronisâ) avouéc transcodâjo en WebM, Ogg Theora, Vorbis et srt.',
	'timedmedia-ogg-short-audio' => 'Fichiér son Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Fichiér vidèô Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Fichiér mèdia Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Fichiér son Ogg $1, temps $2, $3',
	'timedmedia-ogg-long-video' => 'Fichiér vidèô Ogg $1, temps $2, $4×$5 pixèls, $3',
	'timedmedia-ogg-long-multiplexed' => 'Fichiér multiplèxo ôdiô / vidèô Ogg, $1, temps $2, $4×$5 pixèls, $3',
	'timedmedia-ogg-long-general' => 'Fichiér mèdia Ogg, temps $2, $3',
	'timedmedia-ogg-long-error' => 'Fichiér Ogg envalido : $1',
	'timedmedia-webm-short-video' => 'Fichiér vidèô WebM $1, $2',
	'timedmedia-webm-long-video' => 'Fichiér ôdiô / vidèô WebM, $1, longior $2, $4 x $5 pixèls, en tot $3',
	'timedmedia-more' => 'De ples...',
	'timedmedia-dismiss' => 'Cllôre',
	'timedmedia-download' => 'Tèlèchargiér lo fichiér',
	'timedmedia-play-media' => 'Liére lo mèdia',
	'timedmedia-desc-link' => 'Sur ceti fichiér',
	'timedmedia-oggThumb-version' => 'OggHandler at fôta d’oggThumb, vèrsion $1 ou ben ples novèla.',
	'timedmedia-oggThumb-failed' => 'oggThumb at pas reussi a fâre la figura.',
	'timedmedia-status' => 'statut',
	'timedmedia-status-unknown' => 'statut encognu',
	'timedmedia-actions' => 'Accions',
	'timedmedia-not-ready' => 'Pas prèst',
	'timedmedia-percent-done' => 'A pou prés $1 % complètâ',
	'timedmedia-days' => '$1 jorn{{PLURAL:$1||s}}', # Fuzzy
	'timedmedia-hours' => '$1 hor{{PLURAL:$1|a|es}}', # Fuzzy
	'timedmedia-minutes' => '$1 menut{{PLURAL:$1|a|es}}', # Fuzzy
	'timedmedia-seconds' => '$1 second{{PLURAL:$1|a|es}}', # Fuzzy
	'timedmedia-source-file' => 'Sôrsa $1',
	'timedmedia-source-file-desc' => 'Originâl $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-subtitle-language' => 'sot-titros en $1 ($2)',
	'timedmedia-file' => 'Fichiér',
);

/** Friulian (furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'timedmedia-desc' => 'Gjestôr pai files audio, video e di test cul timp, cun supuart pai formâts WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'File audio Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'File video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'File multimediâl Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'File audio Ogg $1, durade $2, $3',
	'timedmedia-ogg-long-video' => 'File video Ogg $1, durade $2, dimensions $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'File audio/video multiplexed Ogg $1, lungjece $2, dimensions $4×$5 pixels, in dut $3',
	'timedmedia-ogg-long-general' => 'File multimediâl Ogg, durade $2, $3',
	'timedmedia-ogg-long-error' => 'File ogg no valit: $1',
	'timedmedia-webm-short-video' => 'File video WebM $1, $2',
	'timedmedia-more' => 'Altri...',
	'timedmedia-dismiss' => 'Siere',
	'timedmedia-download' => 'Discjame il file',
	'timedmedia-desc-link' => 'Informazions su chest file',
	'timedmedia-status' => 'Stât',
	'timedmedia-actions' => 'Azions',
);

/** Irish (Gaeilge)
 * @author Spacebirdy
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'timedmedia-more' => 'Níos mó...',
	'timedmedia-dismiss' => 'Dún',
	'timedmedia-actions' => 'Gníomhartha',
	'timedmedia-subtitle-new-go' => 'Gabh',
	'timedmedia-file' => 'Comhad',
);

/** Galician (galego)
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'timedmedia-desc' => 'Manipulador de son, vídeo e texto sincronizado, con soporte para os formatos WebM, Ogg Theora, Vorbis e srt',
	'timedmedia-ogg-short-audio' => 'Ficheiro de son Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Ficheiro de vídeo Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Ficheiro multimedia Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Ficheiro de son Ogg $1, duración $2, $3',
	'timedmedia-ogg-long-video' => 'Ficheiro de vídeo Ogg $1, duración $2, $4×$5 píxeles, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ficheiro de son/vídeo Ogg multiplex, $1, duración $2, $4×$5 píxeles, $3 total',
	'timedmedia-ogg-long-general' => 'Ficheiro multimedia Ogg, duración $2, $3',
	'timedmedia-ogg-long-error' => 'Ficheiro Ogg non válido: $1',
	'timedmedia-webm-short-video' => 'Ficheiro de vídeo WebM $1, $2',
	'timedmedia-webm-long-video' => 'Ficheiro WebM de son/vídeo, $1, duración $2, $4×$5 píxeles, $3 total',
	'timedmedia-flac-short-audio' => 'Ficheiro de son FLAC, $1',
	'timedmedia-flac-long-audio' => 'Ficheiro de son FLAC, duración $1, $2 total',
	'timedmedia-wav-short-audio' => 'Ficheiro de son WAV, $1',
	'timedmedia-wav-long-audio' => 'Ficheiro de son WAV, duración $1, $2 total',
	'timedmedia-wav-pcm-required' => 'Unicamente pode cargar WAV PCM (modulación por código de pulsos).',
	'timedmedia-mp4-short-video' => 'Ficheiro de vídeo MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'Ficheiro MP4 de son/vídeo, $1, duración $2, $4×$5 píxeles, $3 total',
	'timedmedia-no-player-js' => 'Sentímolo, o seu navegador ten o JavaScript desactivado ou non conta con ningún reprodutor dos soportados.<br />
Pode <a href="$1">descargar o vídeo</a> ou <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">descargar un reprodutor</a> para reproducir o vídeo no seu navegador.',
	'timedmedia-more' => 'Máis...',
	'timedmedia-dismiss' => 'Pechar',
	'timedmedia-download' => 'Descargar o ficheiro',
	'timedmedia-play-media' => 'Reproducir o contido',
	'timedmedia-desc-link' => 'Acerca deste ficheiro',
	'timedmedia-oggThumb-version' => 'O OggHandler necesita a versión $1 ou unha posterior do oggThumb.',
	'timedmedia-oggThumb-failed' => 'Houbo un erro por parte do oggThumb ao crear a miniatura.',
	'timedmedia-status-header' => 'Estado da transcodificación',
	'timedmedia-update-status' => 'Actualizar o estado de transcodificación',
	'timedmedia-status' => 'Estado',
	'timedmedia-status-unknown' => 'Estado descoñecido',
	'timedmedia-transcodeinfo' => 'Descrición da transcodificación derivada',
	'timedmedia-actions' => 'Accións',
	'timedmedia-direct-link' => 'Descargar o derivado',
	'timedmedia-not-ready' => 'Aínda non está preparado',
	'timedmedia-completed-on' => 'Transcodificación completada o $1',
	'timedmedia-error-on' => 'Erro na transcodificación o $1',
	'timedmedia-started-transcode' => 'A transcodificación comezou hai $1. $2',
	'timedmedia-percent-done' => 'Preto do $1% feito',
	'timedmedia-in-job-queue' => 'Engadido á cola de traballos hai $1',
	'timedmedia-unknown-target-size' => 'Tamaño de destino descoñecido; $1 codificados',
	'timedmedia-days' => '{{PLURAL:$1|1 día|$1 días}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hora|$1 horas}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segundo|$1 segundos}}',
	'timedmedia-reset' => 'Restablecer a transcodificación',
	'timedmedia-reset-confirm' => 'Ao restablecer a transcodificación eliminarase calquera ficheiro existente e volverá engadir a transcodificación á cola de traballos. A nova transcodificación levará bastante tempo.<br /><br />
Está seguro de querer continuar?',
	'timedmedia-reset-error' => 'Erro no restablecemento do traballo de transcodificación.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Fonte $1',
	'timedmedia-source-file-desc' => 'Ficheiro $1 orixinal, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Ficheiro $1 orixinal ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160P',
	'timedmedia-derivative-desc-160p.ogv' => 'Vídeo Ogg de baixo ancho de banda (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Vídeo Ogg para a web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Vídeo Ogg para a web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Vídeo Ogg de alta calidade que se pode descargar (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM para a web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM para a web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM para a web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM de alta calidade que se pode descargar (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 compatible con dispositivos móbiles (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 para a web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 de calidade HD (720P)',
	'timedmedia-subtitle-new' => 'Crear unha nova tradución ou editar a actual',
	'timedmedia-subtitle-new-desc' => "Seleccione a lingua e prema no botón \"'''{{int:Timedmedia-subtitle-new-go}}'''\"",
	'timedmedia-subtitle-new-go' => 'Continuar',
	'timedmedia-subtitle-language' => 'Subtítulos en $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Non hai ningún vídeo asociado coa páxina de subtítulos actual',
	'timedmedia-subtitle-no-subtitles' => 'Actualmente non hai subtítulos en $1 para este vídeo; pode [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar esta páxina] para engadilos',
	'timedmedia-subtitle-remote' => 'Os subtítulos deste ficheiro están aloxados en $1',
	'timedmedia-subtitle-remote-link' => 'Pode [$1 ollar a páxina de descrición] deste ficheiro en $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 vídeo|$1 vídeos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 vídeo Ogg|$1 vídeos Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 vídeo WebM|$1 vídeos WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodificación|$1 transcodificacións}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodificación activa|$1 transcodificacións activas}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transcodificación|$1 transcodificacións}} na cola',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodificación fallida|$1 transcodificacións fallidas}}',
	'timedmedia-file' => 'Ficheiro',
	'right-transcode-reset' => 'Restablecer os vídeos transcodificados erroneamente para incluílos de novo na cola de traballo.',
	'right-transcode-status' => 'Ollar a [[Special:TimedMediaHandler|información sobre a actividade de transcodificación actual]]',
	'action-transcode-status' => 'ollar o estado da transcodificación actual',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Flyax
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'timedmedia-ogg-long-error' => 'Ἄκυρα ἀρχεῖα ogg: $1',
	'timedmedia-more' => 'πλέον...',
	'timedmedia-dismiss' => 'Κλῄειν',
	'timedmedia-source-file' => '$1 Πηγή',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 * @author Melancholie
 */
$messages['gsw'] = array(
	'timedmedia-desc' => 'Stellt e Styyrigsprogramm fir zytgstyyrti Medie (Video, Audio, timedText) zur Verfiegig, wo d Format WebM, Ogg Theora, Ogg Vorbis un SubRip unterstützt',
	'timedmedia-ogg-short-audio' => 'Ogg-$1-Audiodatei, $2',
	'timedmedia-ogg-short-video' => 'Ogg-$1-Videodatei, $2',
	'timedmedia-ogg-short-general' => 'Ogg-$1-Mediadatei, $2',
	'timedmedia-ogg-long-audio' => 'Ogg-$1-Audiodatei, Längi: $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg-$1-Videodatei, Längi: $2, $4×$5 Pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-Audio-/Video-Datei, $1, Längi: $2, $4×$5 Pixel, $3',
	'timedmedia-ogg-long-general' => 'Ogg-Mediadatei, Längi: $2, $3',
	'timedmedia-ogg-long-error' => 'Uugiltigi Ogg-Datei: $1',
	'timedmedia-webm-short-video' => 'WebM-$1-Videodatei, $2',
	'timedmedia-webm-long-video' => 'WebM-Audio-/Video-Datei, $1, Längei: $2, $4×$5 Pixel, $3 insgsamt',
	'timedmedia-no-player-js' => 'Excusez, aber Dyy Browser het entwäder JavaScript deaktiviert oder kei unterstitzti Abspilsoftware.<br />
Du chasch <a href="$1">dr Clip abelade</a> oder <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">e Abspielsoftware abelade</a> go dr Clip im Browser abspile.',
	'timedmedia-more' => 'Meh …',
	'timedmedia-dismiss' => 'Zuemache',
	'timedmedia-download' => 'Datei spychere',
	'timedmedia-play-media' => 'Mediedatei abspiile',
	'timedmedia-desc-link' => 'Iber die Datei',
	'timedmedia-oggThumb-version' => 'OggHandler brucht oggThumb in dr Version $1 oder hecher.',
	'timedmedia-oggThumb-failed' => 'oggThumb het kei Miniaturbild chenne aalege.',
	'timedmedia-status-header' => 'Umschlüsseligsstatus',
	'timedmedia-update-status' => 'Umschlüsseligsstatus aktualisiere',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Status nit bekannt',
	'timedmedia-transcodeinfo' => 'Abgleiteti Beschryybig umschlüssle',
	'timedmedia-actions' => 'Aktione',
	'timedmedia-direct-link' => 'Ableitig abelade',
	'timedmedia-not-ready' => 'Nit parat',
	'timedmedia-completed-on' => 'Umschlüsselig vo $1 abgschlosse',
	'timedmedia-error-on' => 'Fääler bim Umschlüssle in $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Umschlüsselig het vor $1 aagfange. $2',
	'timedmedia-percent-done' => 'Öbe $1 % fertig',
	'timedmedia-in-job-queue' => 'Vor $1 zur Ufftragswarteschlange dezuegfiegt worde',
	'timedmedia-unknown-target-size' => 'Unbekannti Ziilgrößi, $1 codiert',
	'timedmedia-days' => '{{PLURAL:$1|1 Tag|$1 Täg}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|1 Stund|$1 Stunde}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|1 Minut|$1 Minute}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|1 Sekund|$1 Sekunde}}', # Fuzzy
	'timedmedia-reset' => 'Umschlüsselig zruggsetze',
	'timedmedia-reset-confirm' => "S Zruggsetze vo dere Umschlüsselig wird (wänn's vorhande isch), die aktuelli Datei ussenee un d Umschlüsselig no emool uff d Ufftragswarteschlange dezuefiege. E nöii Umschlüsselig wird e Wyyl goo.<br /><br /> Söll des würkli gmacht werde?",
	'timedmedia-reset-error' => 'Fääler bim Zruggsetze vo de Umschlüsselig.',
	'timedmedia-source-file' => 'Quell ($1)',
	'timedmedia-source-file-desc' => 'Original $1, $2 x $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg-Videodatei mit niidriger Dateübertragigsrate (160p)',
	'timedmedia-derivative-desc-360p.ogv' => 'Webstreamingfähigi Ogg-Videodatei (360p)',
	'timedmedia-derivative-desc-480p.ogv' => 'Webstreamingfähigi Ogg-Videodatei (480p)',
	'timedmedia-derivative-desc-720p.ogv' => 'Qualitativ hochwertigi Ogg-Videodatei (720p)',
	'timedmedia-derivative-desc-360p.webm' => 'Webstreamingfähigi WebM-Videodatei (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'Webstreamingfähigi WebM-Videodatei (480p)',
	'timedmedia-derivative-desc-720p.webm' => 'Qualitativ hochwertigi WebM-Videodatei (720p)',
	'timedmedia-subtitle-language' => '$1 ($2) Untertitel',
	'timedmedia-subtitle-no-video' => 'Dere Untertitel-Syte isch kei Video zuegordnet.',
	'timedmedia-subtitle-no-subtitles' => 'Es git uff $1 zurzit kei Untertitel für des Video. Bim dezuefiege vo Untertitel cha [{{fullurl:{{FULLPAGENAME}}|action=edit}} die Syte] bearbeitet werde.',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'timedmedia-desc-link' => 'Mychione y choadan shoh',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotem Liss
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'timedmedia-desc' => 'מטפל במדיה מתוזמנת – וידאו, שמע, טקסט מתוזמן – עם תמיכה בתסדירי WebM&rlm;, Ogg Theora&rlm;, Vorbis ו־srt',
	'timedmedia-ogg-short-audio' => 'קובץ שמע $1 של Ogg, $2',
	'timedmedia-ogg-short-video' => 'קובץ וידאו $1 של Ogg, $2',
	'timedmedia-ogg-short-general' => 'קובץ מדיה $1 של Ogg, $2',
	'timedmedia-ogg-long-audio' => 'קובץ שמע $1 של Ogg, באורך $2, $3',
	'timedmedia-ogg-long-video' => 'קובץ וידאו $1 של Ogg, באורך $2, $4×$5 פיקסלים, $3',
	'timedmedia-ogg-long-multiplexed' => 'קובץ Ogg מרובב של שמע ווידאו, $1, באורך $2, $4×$5 פיקסלים, $3 בסך הכול',
	'timedmedia-ogg-long-general' => 'קובץ מדיה של Ogg, באורך $2, $3',
	'timedmedia-ogg-long-error' => 'קובץ ogg בלתי תקין: $1',
	'timedmedia-webm-short-video' => 'קובץ וידוא WebM $1&rlm;, $2',
	'timedmedia-webm-long-video' => 'קובץ שמע ווידאו WebM&rlm;, $1, באורך $2&rlm;, $4 × $5 פיקסלים, $3 סך הכול',
	'timedmedia-flac-short-audio' => 'קובץ שמע FLAC‏, $1',
	'timedmedia-flac-long-audio' => 'קובץ שמע FLAC‏, אורך $1, סך הכול $2',
	'timedmedia-wav-short-audio' => 'קובץ שמע WAV‏, $1',
	'timedmedia-wav-long-audio' => 'קובץ שמע WAV, אורך $1, סך הכול $2',
	'timedmedia-wav-pcm-required' => 'אפשר להעלות רק קובצי WAV בתסדיר PCM‏ (Pulse Code Modulation).',
	'timedmedia-mp4-short-video' => 'קובץ וידאו MP4 $1&rlm;, $2',
	'timedmedia-mp4-long-video' => 'קובץ שמע ווידאו MP4&rlm;, $1, באורך $2, rlm;, $4 × $5פיקסלים, $3 סך הכול',
	'timedmedia-no-player-js' => 'סליחה, בדפדפן שלכם לא מופעלת תמיכה ב־JavaScript או שאין לכם נגן נתמך.<br />
אתם יכולים <a href="$1">להוריד למחשב את הסרטון</a> או <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">להוריד למחשב שלכם נגן</a> שינגן את הסרטון בדפדפן שלכם.',
	'timedmedia-more' => 'עוד…',
	'timedmedia-dismiss' => 'סגירה',
	'timedmedia-download' => 'הורדת הקובץ',
	'timedmedia-play-media' => 'לנגן את המדיה',
	'timedmedia-desc-link' => 'אודות הקובץ',
	'timedmedia-oggThumb-version' => 'OggHandler דורש oggThumb מגרסה $1 או גרסה חדשה יותר.',
	'timedmedia-oggThumb-failed' => 'oggThumb לא הצליח ליצור תמונה מוקטנת.',
	'timedmedia-status-header' => 'מצב המרה משנית',
	'timedmedia-update-status' => 'עדכון מצב המרה משנית',
	'timedmedia-status' => 'מצב',
	'timedmedia-status-unknown' => 'מצב לא ידוע',
	'timedmedia-transcodeinfo' => 'תיאור של תוצאות ההמרה המשנית',
	'timedmedia-actions' => 'פעולות',
	'timedmedia-direct-link' => 'הורדת הקובץ המומר',
	'timedmedia-not-ready' => 'לא מוכן',
	'timedmedia-completed-on' => 'ההמרה המשנית $1 הושלמה',
	'timedmedia-error-on' => 'שגיאה בהמרה משנית ב־$1',
	'timedmedia-started-transcode' => 'המרה משנית התחילה לפני $1‏. $2',
	'timedmedia-percent-done' => 'בערך $1% נעשה',
	'timedmedia-in-job-queue' => 'נוסף לתור משימות לפני $1',
	'timedmedia-unknown-target-size' => 'גודל יעד אינו ידוע, קודדו $1',
	'timedmedia-days' => '{{PLURAL:$1|יום אחד|יומיים|$1 ימים}}',
	'timedmedia-hours' => '{{PLURAL:$1|שעה אחת|שעתיים|$1 שעות}}',
	'timedmedia-minutes' => '{{PLURAL:$1|דקה אחת|$1 דקות}}',
	'timedmedia-seconds' => '{{PLURAL:$1|שנייה אחת|$1 שניות}}',
	'timedmedia-reset' => 'אתחול המרה משנית',
	'timedmedia-reset-confirm' => 'אתחול ההמרה הזאת ימחק כל קובץ קיים (אם יש כזה) ויוסיף שוב את ההמרה המשנית לתור המשימות. ייקח זמן כדי לבצע את ההמרה המשנית שוב.<br /><br />להמשיך?',
	'timedmedia-reset-error' => 'שגיאה באתחול משימת המרה משנית',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'ממקור $1',
	'timedmedia-source-file-desc' => 'קובץ $1 מקורי, $2 × $3&rlm; ($4)',
	'timedmedia-source-audio-file-desc' => 'קובץ $1 מקורי ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'וידאו Ogg (160P)&lrm; לרוחב פס נמוך',
	'timedmedia-derivative-desc-360p.ogv' => 'וידאו Ogg (360P)&lrm; לנגינה שוטפת מהרשת',
	'timedmedia-derivative-desc-480p.ogv' => 'וידאו Ogg (480P)&lrm; לנגינה שוטפת מהרשת',
	'timedmedia-derivative-desc-720p.ogv' => 'וידאו Ogg (720P)&lrm; באיכות גבוהה שניתן להורדה',
	'timedmedia-derivative-desc-160p.webm' => 'WebM להזרמה ברשת (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM ניתן לשידור שטף ברשת (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'וידאו WebM (480P)&lrm; לנגינה שוטפת מהרשת',
	'timedmedia-derivative-desc-720p.webm' => 'וידאו WebM (720P)&lrm; באיכות גבוהה שניתן להורדה',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 ידידותי למכשיר (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'וידאו WebM (480P)&lrm; לנגינה שוטפת מהרשת',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 באיכות גבוהה (720P)',
	'timedmedia-subtitle-new' => 'יצירת תרגום חדש או עריכת תרגום קיים',
	'timedmedia-subtitle-new-desc' => "נא לבחור שפה וללחוץ על כפתור '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'מעבר',
	'timedmedia-subtitle-language' => 'כתוביות ב$1&rlm; ($2)',
	'timedmedia-subtitle-no-video' => 'אין וידאו שמשויך לדף הכתוביות הנוכחי',
	'timedmedia-subtitle-no-subtitles' => 'אין כעת כתוביות עבור השפה הבאה: $1. אפשר [{{fullurl:{{FULLPAGENAME}}|action=edit}} לערוך את הדף הזה] ולהוסיף אותן',
	'timedmedia-subtitle-remote' => 'טקסט מתוזמן עבור קובץ זה מאוחסן ב{{GRAMMAR:תחילית|$1}}',
	'timedmedia-subtitle-remote-link' => 'אפשר [$1 להציג את דף התיאור] של הקובץ הזה בדף $2',
	'timedmediahandler' => 'מדיה מתוזמנת',
	'timedmedia-videos' => '{{PLURAL:$1|סרט אחד|$1 סרטים}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|סרט Ogg אחד|$1 סרטי Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|סרט WebM אחד|$1 סרטי WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|המרה משנית אחת|$1 המרות משניות}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|המרה משנית אחת רצה|$1 המרות משניות רצות}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|המרה משנית אחת בתור|$1 המרות משניות בתור}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|המרות משנית אחת נכשלה|$1 המרות משניות נכשלו}}',
	'timedmedia-file' => 'קובץ',
	'right-transcode-reset' => 'אתחול סרטים שקידוד המשנה שלהם הושלם או נכשל כך שהם מוכנסים מחדש לתור המשימות.',
	'right-transcode-status' => 'הצגת [[Special:TimedMediaHandler|מידע על פעילות המרת־המשנה הנוכחית]]',
	'action-transcode-status' => 'הצגת מצב המרת־המשנה',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 * @author Shyam
 */
$messages['hi'] = array(
	'timedmedia-desc' => 'ऑग थियोरा और वॉर्बिस फ़ाईल्सके लिये चालक, जावास्क्रीप्ट प्लेयर के साथ', # Fuzzy
	'timedmedia-ogg-short-audio' => 'ऑग $1 ध्वनी फ़ाईल, $2',
	'timedmedia-ogg-short-video' => 'ऑग $1 चलतचित्र फ़ाईल, $2',
	'timedmedia-ogg-short-general' => 'ऑग $1 मीडिया फ़ाईल, $2',
	'timedmedia-ogg-long-audio' => 'ऑग $1 ध्वनी फ़ाईल, लंबाई $2, $3',
	'timedmedia-ogg-long-video' => 'ऑग $1 चलतचित्र फ़ाईल, लंबाई $2, $4×$5 पीक्सेल्स, $3',
	'timedmedia-ogg-long-multiplexed' => 'ऑग ध्वनी/चित्र फ़ाईल, $1, लंबाई $2, $4×$5 पिक्सेल्स, $3 कुल',
	'timedmedia-ogg-long-general' => 'ऑग मीडिया फ़ाईल, लंबाई $2, $3',
	'timedmedia-ogg-long-error' => 'गलत ऑग फ़ाईल: $1',
	'timedmedia-more' => 'और...',
	'timedmedia-dismiss' => 'बंद करें',
	'timedmedia-download' => 'फ़ाईल डाउनलोड करें',
	'timedmedia-desc-link' => 'इस फ़ाईलके बारे में',
);

/** Croatian (hrvatski)
 * @author CERminator
 * @author Dalibor Bosits
 * @author Ex13
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'timedmedia-desc' => 'Poslužitelj za Ogg Theora i Vorbis datoteke, s JavaScript preglednikom', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 zvučna datoteka, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 video datoteka, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 medijska datoteka, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 zvučna datoteka, duljine $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 video datoteka, duljine $2, $4x$5 piksela, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multipleksirana zvučna/video datoteka, $1, duljine $2, $4×$5 piksela, $3 ukupno',
	'timedmedia-ogg-long-general' => 'Ogg medijska datoteka, duljine $2, $3',
	'timedmedia-ogg-long-error' => 'nevaljana ogg datoteka: $1',
	'timedmedia-more' => 'Više...',
	'timedmedia-dismiss' => 'Zatvori',
	'timedmedia-download' => 'Snimi datoteku',
	'timedmedia-desc-link' => 'O ovoj datoteci',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Dundak
 * @author Michawiki
 * @author Reedy
 */
$messages['hsb'] = array(
	'timedmedia-desc' => 'Wodźenski program za awdio, widejo a timedText z podpěru za formaty WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Awdiodataja Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Widejodataja Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Ogg medijowa dataja $1, $2',
	'timedmedia-ogg-long-audio' => 'Ogg-awdiodataja $1, dołhosć: $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg-widejodataja $1, dołhosć: $2, $4×$5 pikselow, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multipleksna awdio-/widejodataja, $1, dołhosć: $2, $4×$5 pikselow, $3',
	'timedmedia-ogg-long-general' => 'Ogg medijowa dataja, dołhosć: $2, $3',
	'timedmedia-ogg-long-error' => 'Njepłaćiwa Ogg-dataja: $1',
	'timedmedia-webm-short-video' => 'Widejodataja WebM $1, $2',
	'timedmedia-webm-long-video' => 'Awdio-/widejodataja WebM, $1, dołhosć $2, $4 x $5 pikselow, $3 dohromady',
	'timedmedia-mp4-short-video' => 'MP4 $1 widejodataja, $2',
	'timedmedia-mp4-long-video' => 'MP4 awdio-/widejodataja, $1, dołhosć $2, $4 × $5 pikselow, $3 dohromady',
	'timedmedia-no-player-js' => 'Twój wobhladowak je pak JavaScript znjemóžnił pak nima podpěrowany wothrawak.<br />
Móžeš <a href="$1">klip sćahnyć</a> abo <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">wothrawak sćahnyć</a>, zo by klip w swojim wobhladowaku wothrawał.',
	'timedmedia-more' => 'Wjace ...',
	'timedmedia-dismiss' => 'Začinić',
	'timedmedia-download' => 'Dataju sćahnyć',
	'timedmedia-play-media' => 'Medijowu dataju wothrać',
	'timedmedia-desc-link' => 'Wo tutej dataji',
	'timedmedia-oggThumb-version' => 'OggHandler trjeba wersiju $1 oggThumb abo nowšu.',
	'timedmedia-oggThumb-failed' => 'oggThumb njemóžeše wobrazk wutworić.',
	'timedmedia-status-header' => 'Překodowanski status',
	'timedmedia-update-status' => 'Překodowanski status aktualizować',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Njeznaty status',
	'timedmedia-transcodeinfo' => 'Wotwodźene wopisanje překodować',
	'timedmedia-actions' => 'Akcije',
	'timedmedia-direct-link' => 'Wotwodźenje sćahnyć',
	'timedmedia-not-ready' => 'Nic hotowy',
	'timedmedia-completed-on' => 'Překodowanje $1 wotzamknjene',
	'timedmedia-error-on' => 'Zmylk při překodowanju $1',
	'timedmedia-started-transcode' => 'Překodowanje před $1 startowane. $2',
	'timedmedia-percent-done' => 'Na wšě $1% sčinjene',
	'timedmedia-in-job-queue' => 'Před $1 čakanskemu rynčkej přidaty',
	'timedmedia-unknown-target-size' => 'Njeznata cilowa wulkosć, $1 kodowane',
	'timedmedia-days' => '{{PLURAL:$1|1 dźeń|$1 dnjej|$1 dny|$1 dnjow}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hodźina|$1 hodźinje|$1 hodźiny|$1 hodźin}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 mjeńšina|$1 mjeńšinje|$1 mjeńšiny|$1 mjeńšin}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 sekunda|$1 sekundźe|$1 sekundy|$1 sekundow}}',
	'timedmedia-reset' => 'Překodowanje wróćo stajić',
	'timedmedia-reset-confirm' => 'Wróćostajenje tutoho překodowanja wotstroni eksistowacu dataju (jeli tajka eksistuje), a budźe překodowanje znowa čakanskemu rynčkej přidawać. Nowe překodowanje budźe někotry čas trać.<br /><br />
Chceš woprawdźe pokročować?',
	'timedmedia-reset-error' => 'Zmylk při wróćostajenju překodowanja.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Žórło ($1)',
	'timedmedia-source-file-desc' => 'Originalna dataja $1, $2 x $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Originalna $1-dataja ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg-widejo z niskej šěrokosću pasma (160p)',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg-widejo (360p), kotrež da so přez Web přenjesć',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg-widejo (480p), kotrež da so přez Web přenjesć',
	'timedmedia-derivative-desc-720p.ogv' => 'Sćahujomne Ogg-widejo wysokeje kwality (720p)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM-widejo (160p), kotrež da so přez Web přenjesć',
	'timedmedia-derivative-desc-360p.webm' => 'WebM-widejo (360p), kotrež da so přez Web přenjesć',
	'timedmedia-derivative-desc-480p.webm' => 'WebM-widejo (480p), kotrež da so přez Web přenjesć',
	'timedmedia-derivative-desc-720p.webm' => 'Sćahujomna WebM-dataja wysokeje kwality (720p)',
	'timedmedia-derivative-desc-320p.mp4' => 'Gratapřećelny MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4-dataja, kotraž da so přez Web přenjesć',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 w HD-kwaliće (720P)',
	'timedmedia-subtitle-new' => 'Nowy přełožk wutworić abo eksistowacy wobdźěłać',
	'timedmedia-subtitle-new-desc' => "Wubjer rěč a klikń na tłóčatko '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'W porjadku',
	'timedmedia-subtitle-language' => '$1 ($2) podtitule',
	'timedmedia-subtitle-no-video' => 'Widejo zwjazane z aktuelnej stronu podtitulow njeje',
	'timedmedia-subtitle-no-subtitles' => 'Tuchwilu podtitule w $1 zu tute widejo njejsu, móžeš [{{fullurl:{{FULLPAGENAME}}|action=edit}} tutu stronu wobdźěłać], zo by je přidał',
	'timedmedia-subtitle-remote' => 'timedText za tutu dataju je na $1',
	'timedmedia-subtitle-remote-link' => 'Móžeš sej [$1 wopisansku stronu] za tutu dataja na $2 wobhladać',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 widejo|$1 wideji|$1 wideja|$1 widejow}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg-widejo|$1 Ogg-wideji|$1 Ogg-wideja|$1 Ogg-widejow}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM-widejo|$1 WebM-wideji|$1 WebM-wideja|$1 WebM-widejow}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 překodowanje|$1 překodowani|$1 překodowanja|$1 překodowanjow}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 běžne překodowanje|$1 běžnej překodowani|$1 běžne překodowanja|$1 běžnych překodowanjow}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 překodowanje|$1 překodowani|$1 překodowanja|$1 překodowanjow}} w čakanskim rynku',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 zwrěsćene překodowanje|$1 zwrěsćenej překodowani|$1 zwrěsćene překodowanja|$1 zwrěsćenych překodowanjow}}',
	'timedmedia-file' => 'Dataja',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 * @author Tgr
 */
$messages['hu'] = array(
	'timedmedia-desc' => 'JavaScript nyelven írt lejátszó Ogg Theora és Vorbis fájlokhoz', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 hangfájl, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videofájl, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 médiafájl, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 hangfájl, hossza: $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videófájl, hossza $2, $4×$5 képpont, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg egyesített audió- és videófájl, $1, hossz: $2, $4×$5 képpont, $3 összesen',
	'timedmedia-ogg-long-general' => 'Ogg médiafájl, hossza: $2, $3',
	'timedmedia-ogg-long-error' => 'Érvénytelen ogg fájl: $1',
	'timedmedia-no-player-js' => 'Sajnáljuk, a böngésződben vagy le van tiltva a JavaScript, vagy nincs egyetlen támogatott lejátszója sem.<br />
<a href="$1">Letöltheted a klipet</a>, vagy <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">letölthetsz egy lejátszót</a> a böngészőben való megtekintéshez.',
	'timedmedia-more' => 'Tovább...',
	'timedmedia-dismiss' => 'Bezárás',
	'timedmedia-download' => 'Fájl letöltése',
	'timedmedia-play-media' => 'Média lejátszása',
	'timedmedia-desc-link' => 'Fájlinformációk',
	'timedmedia-oggThumb-version' => 'Az OggHandlerhez $1 vagy későbbi verziójú oggThumb szükséges.',
	'timedmedia-oggThumb-failed' => 'Az oggThumb nem tudta elkészíteni a bélyegképet.',
	'timedmedia-source-file-desc' => 'Eredeti $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Alacsony sávszélességű Ogg videó (160P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Magas minőségű, letölthető Ogg videó (720P)',
	'timedmedia-derivative-desc-720p.webm' => 'Magas minőségű, letölthető WebM (720P)',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'timedmedia-desc' => 'Gestor pro audio, video e texto synchronisate, con supporto del formatos WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'File audio Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'File video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'File media Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'File audio Ogg $1, duration $2, $3',
	'timedmedia-ogg-long-video' => 'File video Ogg $1, duration $2, $4×$5 pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'File multiplexate audio/video Ogg, $1, duration $2, $4×$5 pixel, $3 in total',
	'timedmedia-ogg-long-general' => 'File media Ogg, duration $2, $3',
	'timedmedia-ogg-long-error' => 'File Ogg invalide: $1',
	'timedmedia-webm-short-video' => 'File video WebM $1, $2',
	'timedmedia-webm-long-video' => 'File audio/video WebM, $1, longitude $2, $4 × $5 pixels, $3 in total',
	'timedmedia-no-player-js' => 'Pardono, tu systema o ha JavaScript disactivate o non ha un reproductor supportate.<br />
Tu pote <a href="$1">discargar le clip</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">discargar un reproductor</a> pro reproducer le clip in tu navigator.',
	'timedmedia-more' => 'Plus…',
	'timedmedia-dismiss' => 'Clauder',
	'timedmedia-download' => 'Discargar file',
	'timedmedia-play-media' => 'Reproducer multimedia',
	'timedmedia-desc-link' => 'A proposito de iste file',
	'timedmedia-oggThumb-version' => 'OggHandler require oggThumb version $1 o plus recente.',
	'timedmedia-oggThumb-failed' => 'oggThumb ha fallite de crear le miniatura.',
	'timedmedia-status-header' => 'Stato de transcodification',
	'timedmedia-update-status' => 'Actualisar stato de transcodification',
	'timedmedia-status' => 'stato',
	'timedmedia-status-unknown' => 'stato incognite',
	'timedmedia-transcodeinfo' => 'Description del file transcodificate',
	'timedmedia-actions' => 'actiones',
	'timedmedia-direct-link' => 'Discargar file transcodificate',
	'timedmedia-not-ready' => 'Non preste',
	'timedmedia-completed-on' => 'Transcodification de $1 complete',
	'timedmedia-error-on' => 'Error in transcodification a $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Le transcodification comenciava $1 retro. $2',
	'timedmedia-percent-done' => 'Circa $1% complete',
	'timedmedia-in-job-queue' => 'Addite al cauda de actiones $1 retro',
	'timedmedia-unknown-target-size' => 'Dimension del destination incognite, $1 codificate',
	'timedmedia-days' => '{{PLURAL:$1|die|$1 dies}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|hora|$1 horas}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|minuta|$1 minutas}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|secunda|$1 secundas}}', # Fuzzy
	'timedmedia-reset' => 'Reinitialisar transcodification',
	'timedmedia-reset-confirm' => 'Reinitialisar iste transcodification removera tote le files existente (si presente), e illo re-addera le transcodification al cauda de actiones. Le transcodification prendera un tempore. <br /><br />Es tu secur de voler continuar?',
	'timedmedia-reset-error' => 'Error durante le reinitialisation del action de transcodification',
	'timedmedia-source-file' => 'original $1',
	'timedmedia-source-file-desc' => 'Original $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg a basse largor de banda (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg transmissibile per fluxo web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg transmissibile per fluxo web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Video Ogg discargabile de alte qualitate (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM transmissibile per fluxo web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM transmissibile per fluxo web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM transmissibile per fluxo web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM discargabile de alte qualitate (720P)',
	'timedmedia-subtitle-new' => 'Crear un nove traduction o modificar le existente',
	'timedmedia-subtitle-new-desc' => "Reimplacia le litteras '''$1''' per le [[:en:ISO 639|codice de tu lingua]] e preme le button '''{{int:Timedmedia-subtitle-new-go}}'''", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Va',
	'timedmedia-subtitle-language' => '$1 ($2) subtitulos',
	'timedmedia-subtitle-no-video' => 'Il non ha video associate con le actual pagina de subtitulos',
	'timedmedia-subtitle-no-subtitles' => 'Il ha actualmente nulle subtitulos in $1 pro iste video. Tu pote [{{fullurl:{{FULLPAGENAME}}|action=edit}} modificar iste pagina] pro adder los.',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videos}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 video Ogg|$1 videos Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 video WebM|$1 videos WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodification|$1 transcodificationes}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodification|$1 transcodificationes}} active',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transcodification|$1 transcodificationes}} in cauda',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodification|$1 transcodificationes}} fallite',
	'timedmedia-file' => 'File',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Farras
 * @author Irwangatot
 * @author IvanLanin
 * @author Iwan Novirion
 * @author Rex
 * @author පසිඳු කාවින්ද
 */
$messages['id'] = array(
	'timedmedia-desc' => 'Pemroses audio, video, dan teks berwaktu, dengan dukungan format WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Berkas suara $1 ogg, $2',
	'timedmedia-ogg-short-video' => 'Berkas video $1 ogg, $2',
	'timedmedia-ogg-short-general' => 'Berkas media $1 ogg, $2',
	'timedmedia-ogg-long-audio' => 'Berkas suara $1 ogg, panjang $2, $3',
	'timedmedia-ogg-long-video' => 'Berkas video $1 ogg, panjang $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Berkas audio/video multiplexed ogg, $1, panjang $2, $4×$5 piksel, $3 keseluruhan',
	'timedmedia-ogg-long-general' => 'Berkas media ogg, panjang $2, $3',
	'timedmedia-ogg-long-error' => 'Berkas ogg tak valid: $1',
	'timedmedia-webm-short-video' => 'Berkas video $1 WebM, $2',
	'timedmedia-webm-long-video' => 'Berkas audio/video WebM, $1, lama $2, $4 × $5 piksel, $3 keseluruhan',
	'timedmedia-no-player-js' => 'Maaf, peramban Anda memiliki JavaScript yang dinonaktifkan atau tidak memiliki pemutar media apapun.<br />
Anda dapat <a href="$1">mengunduh klip</a> atau <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">mengunduh pemutar</a> untuk memutar klip di peramban Anda.',
	'timedmedia-more' => 'Lainnya...',
	'timedmedia-dismiss' => 'Tutup',
	'timedmedia-download' => 'Unduh berkas',
	'timedmedia-play-media' => 'Putar media',
	'timedmedia-desc-link' => 'Mengenai berkas ini',
	'timedmedia-oggThumb-version' => 'OggHandler membutuhkan oggThumb versi $1 atau terbaru.',
	'timedmedia-oggThumb-failed' => 'oggThumb gagal membuat miniatur gambar.',
	'timedmedia-status-header' => 'Status transkoder',
	'timedmedia-update-status' => 'Memperbarui status transkoder',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Status tidak diketahui',
	'timedmedia-transcodeinfo' => 'Deskripsi turunan transkoder',
	'timedmedia-actions' => 'Tindakan',
	'timedmedia-direct-link' => 'Unduh turunan',
	'timedmedia-not-ready' => 'Belum siap',
	'timedmedia-completed-on' => 'Transkoder komplit $1',
	'timedmedia-error-on' => 'Kesalahan dalam transkoder pada  $1 .', # Fuzzy
	'timedmedia-started-transcode' => 'Transkoder mulai $1 yang lalu. $2',
	'timedmedia-percent-done' => 'Sekitar $1% selesai',
	'timedmedia-days' => '{{PLURAL:$1|$1 hari}}',
	'timedmedia-hours' => '{{PLURAL:$1|$1 jam}}',
	'timedmedia-minutes' => '{{PLURAL:$1|$1 menit}}',
	'timedmedia-seconds' => '{{PLURAL:$1|$1 detik}}',
	'timedmedia-reset' => 'Reset transkoder',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Sumber $1',
	'timedmedia-source-file-desc' => '$1 asli, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-160p.ogv' => 'Ogg 160p',
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg lebar pita rendah (160P)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360p',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg aliran web (360P)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480p',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg aliran web (480P)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720p',
	'timedmedia-derivative-desc-720p.ogv' => 'Video Ogg unduhan berkualitas tinggi (720P)',
	'timedmedia-derivative-160p.webm' => 'WebM 160p',
	'timedmedia-derivative-360p.webm' => 'WebM 360p',
	'timedmedia-derivative-desc-360p.webm' => 'WebM aliran web (360P)',
	'timedmedia-derivative-480p.webm' => 'WebM 480p',
	'timedmedia-derivative-desc-480p.webm' => 'WebM aliran web (480P)',
	'timedmedia-derivative-720p.webm' => 'WebM 720p',
	'timedmedia-derivative-desc-720p.webm' => 'WebM unduhan berkualitas tinggi (720P)',
	'timedmedia-derivative-320p.mp4' => 'H264 320p',
	'timedmedia-derivative-480p.mp4' => 'H264 480p',
	'timedmedia-derivative-720p.mp4' => 'H264 720p',
	'timedmedia-derivative-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-desc-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-opus' => 'Opus',
	'timedmedia-derivative-desc-opus' => 'Opus',
	'timedmedia-derivative-mp3' => 'MP3',
	'timedmedia-derivative-desc-mp3' => 'MP3',
	'timedmedia-derivative-m4a' => 'AAC',
	'timedmedia-derivative-desc-m4a' => 'AAC',
	'timedmedia-subtitle-new-go' => 'Lanjut',
	'timedmedia-subtitle-language' => 'Teks film $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Tidak ada video yang terkait dengan halaman subjudul ini',
	'timedmedia-subtitle-no-subtitles' => 'Saat ini tidak ada subjudul $1 untuk video ini. Anda dapat [{{fullurl: {{FULLPAGENAME}}|action=edit}} menyunting halaman ini] untuk menambahkannya',
	'timedmediahandler' => 'Daftar berkas media',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Video ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 Video WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transkoder}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transkoder aktif}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 antrian transkoder}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transkoder rusak}}',
	'timedmedia-file' => 'Berkas',
	'right-transcode-reset' => 'Reset transkoder rusak ataupun yang tidak sehingga kembali dimasukkan dalam antrian.',
	'right-transcode-status' => 'Lihat [[Special:TimedMediaHandler|informasi tentang aktifitas transkoder terkini]]',
	'action-transcode-status' => 'lihat status transkoder terkini',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'timedmedia-desc' => 'Panagtengngel para iti audio, video ken naorasan a testo, nga adda ti porma a suporta para iti WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 a mangeg a papeles, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 a video a papeles, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 a midia a papeles, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 a mangeg a papeles, kaatiddog $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 a video a papeles, kaatiddog $2, $4 × $5 a piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multiplexed nga audio/video a papeles, $1, kaatiddog $2, $4 × $5 a piksel, $3 amin-amin',
	'timedmedia-ogg-long-general' => 'Ogg midia a papeles, kaatiddog $2, $3',
	'timedmedia-ogg-long-error' => 'Imbalido nga Ogg a papeles: $1',
	'timedmedia-webm-short-video' => 'WebM $1 a video a papeles, $2',
	'timedmedia-webm-long-video' => 'WebM nga audio/video a papeles, $1, kaatiddog $2, $4 × $5 a piksel, $3 amin-amin',
	'timedmedia-mp4-short-video' => 'MP4 $1 a video apapeles, $2',
	'timedmedia-mp4-long-video' => 'MP4 nga audio/video a papeles, $1, kaatiddog $2, $4 × $5 a piksel, $3 amin-amin',
	'timedmedia-no-player-js' => 'Pasensia, ti pagbasabasam ket mabalin a nabaldado ti JavaScript wenno awan ti nasuportaran a mangay-ayam.<br />
Mabalinmo ti <a href="$1">agikarga ti sigpit</a> wenno <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">agikarga ti maysa a magay-ayam</a> tapno maay-ayam ti sigpit iti pagbasabasam.',
	'timedmedia-more' => 'Adu pay...',
	'timedmedia-dismiss' => 'Irikep',
	'timedmedia-download' => 'Ikarga ti papeles',
	'timedmedia-play-media' => 'Ay-ayamen ti midia',
	'timedmedia-desc-link' => 'Maipanggep ti daytoy a papeles',
	'timedmedia-oggThumb-version' => 'Ti OggHandler ket masapulna ti oggThumb a bersion ti $1 wenno ti naududi.',
	'timedmedia-oggThumb-failed' => 'Napaay ti oggThumb nga agaramid ti imahen.',
	'timedmedia-status-header' => 'Kasasaad ti transkodigo',
	'timedmedia-update-status' => 'Pabaruen ti kasasaad ti transkodigo',
	'timedmedia-status' => 'Kasasaad',
	'timedmedia-status-unknown' => 'Di ammo a kasasaad',
	'timedmedia-transcodeinfo' => 'Deribatibo a deskripsion ti transkodigo',
	'timedmedia-actions' => 'Dagiti aramid',
	'timedmedia-direct-link' => 'Ikarga ti deribatibo',
	'timedmedia-not-ready' => 'Saan pay a sisasagana',
	'timedmedia-completed-on' => 'Nakompleto ti transkodigo $1',
	'timedmedia-error-on' => 'Biddut ti transkodigo iti $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Ti transkodigo ket nairugi di $1. $2',
	'timedmedia-percent-done' => 'Agarup a $1% ti nalapasen',
	'timedmedia-in-job-queue' => 'Nagnayon idiay Pagurayan ti maaramid idi $1',
	'timedmedia-unknown-target-size' => 'Di ammo a kadakkel ti puntaan, $1 ti nakodigo',
	'timedmedia-days' => '{{PLURAL:$1|1 nga aldaw|$1 nga al-aldaw}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 nga oras|$1 nga or-oras}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 a minuto|$1 a minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 a segundo|$1 a seg-segundo}}',
	'timedmedia-reset' => 'Iyasentar manen ti transkodigo',
	'timedmedia-reset-confirm' => 'Ti papangyasentar ti daytoy a transkodigo ket mangikkat ti aniaman nga adda a papeles (no adda), ket manginayonto manen ti transkodigo iti pagurayan ti maaramid. <br /><br />
Seguradoka kadi a kayatmo ti tumuloy?',
	'timedmedia-reset-error' => 'Biddut ti panangiyasentar manen ti transkodigo a maaramid.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 taudan',
	'timedmedia-source-file-desc' => 'Kasisigud a $1 a papeles, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Kasisigud a $1 a papeles ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ababa ti bandwidth a video ti Ogg (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Maiwaragawag ti web a video ti Ogg (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Maiwaragawag ti web a video ti Ogg (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Maikarga a nangato ti kalidadna a video ti Ogg (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Maiwaragawag ti web a WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Maiwaragawag ti web a WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Maiwaragawag ti web a WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Maikarga a nangato ti kalidadna a WebM (720)',
	'timedmedia-derivative-desc-320p.mp4' => 'Mannakigayyem a ramit ti MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Maiwaragawag ti web a Mp4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD ti kalidadna a MP4 (720P)',
	'timedmedia-subtitle-new' => 'Agpartuat ti baro a panagipatarus wenno urnosen ti adda',
	'timedmedia-subtitle-new-desc' => "Agpili ti pagsasao ken pinduten ti '''{{int:Timedmedia-subtitle-new-go}}''' a buton",
	'timedmedia-subtitle-new-go' => 'Inkan',
	'timedmedia-subtitle-language' => 'Dagiti $1 ($2) a subtitulo',
	'timedmedia-subtitle-no-video' => 'Awan ti video a mainanig iti agdama a subtitulo ti panid',
	'timedmedia-subtitle-no-subtitles' => 'Awan dagiti agdama asubtitulo iti $1 para iti daytoy a video, mabalinmo ti [{{fullurl:{{FULLPAGENAME}}|action=edit}} agurnods ti daytoy a panid] tapno makanayonka kaniada',
	'timedmedia-subtitle-remote' => 'Ti naorasan a testo para iti daytoy a papeles ket nanisangaili idiay $1',
	'timedmedia-subtitle-remote-link' => 'Mabalinmo a [$1 kitaen ti deskripsion ti panid] para iti daytoy a papeles idiay $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 a video|dagiti $1 a video}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 nga Ogg a video|dagiti $1 nga Ogg a video}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 a WebM a video|dagiti $1 a WebM a video}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 a transkodigo|dagiti $1 a transkodigo}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 nga agtartaray a transkodigo|dagiti $1 nga agtartaray a transkodigo}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 a naiyur-uray a transkodigo|dagiti $1 a naiyur-uray a transkodigo}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 a napaay a transkodigo|dagiti $1 a napaay a transkodigo}}',
	'timedmedia-file' => 'Papeles',
	'right-transcode-reset' => 'Iyasentar manen ti napaay wenno dagiti naitranskodigo a video tapno maisengngatda manen ti pagurayan ti maaramid',
	'right-transcode-status' => 'Kitaen ti [[Special:TimedMediaHandler|pakaammo a maipanggep ti agdama a tignay ti transkodigo]]',
	'action-transcode-status' => 'kitaen ti agdama a kasasaad ti transkodigo',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'timedmedia-ogg-long-error' => 'Ne-valida Ogg-arkivo: $1',
	'timedmedia-more' => 'Plus…',
	'timedmedia-dismiss' => 'Klozar',
	'timedmedia-desc-link' => 'Pri ca arkivo',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 * @author Snævar
 * @author Spacebirdy
 */
$messages['is'] = array(
	'timedmedia-desc' => 'Rekill fyrir hljóð, myndbönd og texta myndbanda með stuðningi við skráarsniðin WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 hljóðskrá, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 myndbandskrá, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 margmiðlunarskrá, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 hljóðskrá, lengd $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 myndbandskrá, lengd $2, $4×$5 dílar, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg myndbandaskrá, $1, lengd $2, $4 × $5 dílar, $3 samanlagt',
	'timedmedia-ogg-long-general' => 'Ogg margmiðlunarskrá, lengd $2, $3',
	'timedmedia-ogg-long-error' => 'Ógild Ogg skrá: $1',
	'timedmedia-webm-short-video' => 'WebM $1 myndbandskrá, $2',
	'timedmedia-webm-long-video' => 'WebM myndbandaskrá, $1, lengd $2, $4 × $5 dílar, $3 samanlagt',
	'timedmedia-mp4-short-video' => 'MP4 $1 myndbandaskrá, $2',
	'timedmedia-mp4-long-video' => 'MP4 myndbandaskrá, $1, lengd $2, $4 × $5 dílar, $3 samanlagt',
	'timedmedia-no-player-js' => 'Því miður hefur vafrinn þinn annaðhvort óvirkan JavaScript eða engan studdann spilara.<br />
Þú getur <a href="$1">hlaðið niður skránni</a> eða <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">hlaðið niður spilara</a> til þess að spila skránna í vafranum.',
	'timedmedia-more' => 'Meira...',
	'timedmedia-dismiss' => 'Loka',
	'timedmedia-download' => 'Sækja skrá',
	'timedmedia-play-media' => 'Spila margmiðlunarskrá',
	'timedmedia-desc-link' => 'Um þessa skrá',
	'timedmedia-oggThumb-version' => 'OggHandler þarfnast oggThumb útgáfu $1 eða nýrri.',
	'timedmedia-oggThumb-failed' => 'oggThumb mistókst að búa til smámynd.',
	'timedmedia-status' => 'Staða',
	'timedmedia-actions' => 'Aðgerðir',
	'timedmedia-direct-link' => 'Sækja eftirgerð',
	'timedmedia-not-ready' => 'Ekki tilbúin',
	'timedmedia-percent-done' => 'Um $1% lokið',
	'timedmedia-unknown-target-size' => 'Óþekkt markstærð, $1 kóðað',
	'timedmedia-days' => '{{PLURAL:$1|einn dagur|$1 dagar}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|einn klukkutími|$1 klukkutímar}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|ein mínúta|$1 mínútur}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|ein sekúnda|$1 sekúndur}}', # Fuzzy
	'timedmedia-source-file' => '$1 uppruni',
	'timedmedia-source-file-desc' => 'Upphafleg $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg myndband fyrir litla bandbreidd (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg myndbands streymi (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg myndbands streymi (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Hágæða niðurhalanlegt Ogg myndband (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM myndbands streymi (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM myndbands streymi (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM myndbands streymi (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Hágæða niðurhalanlegt WebM myndband (720P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 myndbands streymi (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'Háskerpu MP4 (720P)',
	'timedmedia-subtitle-new-desc' => "Skiptu '''$1''' út fyrir [[:en:ISO 639|tungumálakóðann]] þinn og smelltu á '''{{int:Timedmedia-subtitle-new-go}}''' takkann", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Áfram',
	'timedmedia-subtitle-no-video' => 'Ekkert myndband tengist þessum myndbanda texta',
	'timedmedia-videos' => '{{PLURAL:$1|$1 myndband|$1 myndbönd}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg myndband|$1 Ogg myndbönd}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM myndband|$1 WebM myndbönd}}',
	'timedmedia-file' => 'Skrá',
);

/** Italian (italiano)
 * @author .anaconda
 * @author Beta16
 * @author BrokenArrow
 * @author Darth Kule
 * @author F. Cosoleto
 * @author Gianfranco
 * @author Raoli
 */
$messages['it'] = array(
	'timedmedia-desc' => 'Gestore per i file audio, video e con i sottotitoli; formati supportati: WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'File audio Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'File video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'File multimediale Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'File audio Ogg $1, durata $2, $3',
	'timedmedia-ogg-long-video' => 'File video Ogg $1, durata $2, dimensioni $4×$5 pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'File audio/video multiplexed Ogg $1, durata $2, dimensioni $4×$5 pixel, complessivamente $3',
	'timedmedia-ogg-long-general' => 'File multimediale Ogg, durata $2, $3',
	'timedmedia-ogg-long-error' => 'File ogg non valido: $1',
	'timedmedia-webm-short-video' => 'File video WebM $1, $2',
	'timedmedia-webm-long-video' => 'File audio/video WebM $1, durata $2, dimensioni $4×$5 pixel, complessivamente $3',
	'timedmedia-flac-short-audio' => 'File audio FLAC, $1',
	'timedmedia-flac-long-audio' => 'File audio FLAC, durata $1, complessivamente $2',
	'timedmedia-wav-short-audio' => 'File audio WAV, $1',
	'timedmedia-wav-long-audio' => 'File audio WAV, durata $1, complessivamente $2',
	'timedmedia-wav-pcm-required' => 'Puoi caricare solo PCM (Pulse Code Modulation) WAV.',
	'timedmedia-mp4-short-video' => 'File video MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'File audio/video MP4 $1, durata $2, dimensioni $4×$5 pixel, complessivamente $3',
	'timedmedia-no-player-js' => 'Si sta utilizzando un browser che ha JavaScript disattivato oppure non ha alcun riproduttore supportato.<br />
È possibile <a href="$1">scaricare il clip multimediale</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">un riproduttore</a> per riprodurre il clip nel proprio browser.',
	'timedmedia-more' => 'Altro...',
	'timedmedia-dismiss' => 'Chiudi',
	'timedmedia-download' => 'Scarica il file',
	'timedmedia-play-media' => 'Riproduci file multimediale',
	'timedmedia-desc-link' => 'Informazioni su questo file',
	'timedmedia-oggThumb-version' => 'OggHandler richiede la versione $1 o superiore di oggThumb.',
	'timedmedia-oggThumb-failed' => 'oggThumb non è riuscito a creare la miniatura.',
	'timedmedia-status-header' => 'Stato transcodifica',
	'timedmedia-update-status' => 'Aggiorna stato transcodifica',
	'timedmedia-status' => 'Stato',
	'timedmedia-status-unknown' => 'Stato sconosciuto',
	'timedmedia-transcodeinfo' => 'Descrizione derivata dal Transcodice',
	'timedmedia-actions' => 'Azioni',
	'timedmedia-direct-link' => 'Scarica derivato',
	'timedmedia-not-ready' => 'Non pronto',
	'timedmedia-completed-on' => 'Transcodifica completata $1',
	'timedmedia-error-on' => 'Errore nella transcodifica il $1',
	'timedmedia-started-transcode' => 'Transcodifica iniziata $1 fa. $2',
	'timedmedia-percent-done' => '$1% circa completato',
	'timedmedia-in-job-queue' => 'Aggiunto alla coda di lavoro  $1  fa',
	'timedmedia-unknown-target-size' => 'Dimensioni di destinazione sconosciuta, $1 codificato',
	'timedmedia-days' => '{{PLURAL:$1|1 giorno|$1 giorni}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 ora|$1 ore}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minuti}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 secondo|$1 secondi}}',
	'timedmedia-reset' => 'Resetta transcodifica',
	'timedmedia-reset-confirm' => 'Resettando questa transcodifica tutti i file esistenti (se presenti) saranno cancellati e la transcodifica sarà nuovamente aggiunta alla coda di lavoro. Ci vorrà qualche tempo per rieseguire la transcodifica. <br /><br />
Continuare?',
	'timedmedia-reset-error' => 'Errore nel resettaggio della transcodifica.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Fonte $1',
	'timedmedia-source-file-desc' => 'File originale $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'File originale $1 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg a bassa larghezza di banda (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg trasmettibile in streaming via Web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg trasmettibile in streaming via Web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Video Ogg scaricabile in alta qualità (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM trasmettibile in streaming via Web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM trasmettibile in streaming via Web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM trasmettibile in streaming via Web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM scaricabile in alta qualità (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 per dispositivi compatibili (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 trasmettibile in streaming via Web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 in qualità HD (720P)',
	'timedmedia-subtitle-new' => 'Creare una nuova traduzione o modificare esistenti',
	'timedmedia-subtitle-new-desc' => "Seleziona la lingua e premi il pulsante '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Vai',
	'timedmedia-subtitle-language' => '$1 ($2) sottotitoli',
	'timedmedia-subtitle-no-video' => "Non non c'è nessun video associato all'attuale pagina dei sottotitoli",
	'timedmedia-subtitle-no-subtitles' => 'Non ci sono al momento sottotitoli in $1 per questo video, è possibile [{{fullurl:{{FULLPAGENAME}}|action=edit}} modificare questa pagina] per aggiungerli',
	'timedmedia-subtitle-remote' => 'I sottotitoli per questo file sono ospitati su $1',
	'timedmedia-subtitle-remote-link' => 'Puoi vedere la [$1 pagina di descrizione] per questo file su $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 video Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 video WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodifica|$1 transcodifiche}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodifica|$1 transcodifiche}} in esecuzione',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transcodifica|$1 transcodifiche}} in coda',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodifica fallita|$1 transcodifiche fallite}}',
	'timedmedia-file' => 'File',
	'right-transcode-reset' => 'Reimposta i video difettosi o transcodificati così che possano essere inclusi nuovamente in coda di lavoro.',
	'right-transcode-status' => "Visualizza [[Special:TimedMediaHandler|informazioni sull'attuale attività di transcodifica]]",
	'action-transcode-status' => "visualizzare l'attuale stato della transcodifica",
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Kahusi
 * @author Shirayuki
 * @author 青子守歌
 */
$messages['ja'] = array(
	'timedmedia-desc' => 'WebM、Ogg Theora、Vorbis、srt 形式に対応した、動画、音声、字幕のハンドラー',
	'timedmedia-ogg-short-audio' => 'Ogg $1 音声ファイル、$2',
	'timedmedia-ogg-short-video' => 'Ogg $1 動画ファイル、$2',
	'timedmedia-ogg-short-general' => 'Ogg $1 メディアファイル、$2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 音声ファイル、長さ $2、$3',
	'timedmedia-ogg-long-video' => 'Ogg $1 動画ファイル、長さ $2、$4 × $5 ピクセル、$3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg 多重音声/動画ファイル、$1、長さ $2、$4 × $5 ピクセル、全体で $3',
	'timedmedia-ogg-long-general' => 'Ogg メディアファイル、長さ $2、$3',
	'timedmedia-ogg-long-error' => '無効な Ogg ファイル: $1',
	'timedmedia-webm-short-video' => 'WebM $1 動画ファイル、$2',
	'timedmedia-webm-long-video' => 'WebM 音声/動画ファイル、$1、長さ $2、$4 × $5 ピクセル、全体で $3',
	'timedmedia-flac-short-audio' => 'FLAC 音声ファイル、$1',
	'timedmedia-flac-long-audio' => 'FLAC 音声ファイル、長さ $1、全体で $2',
	'timedmedia-wav-short-audio' => 'WAV 音声ファイル、$1',
	'timedmedia-wav-long-audio' => 'WAV 音声ファイル、長さ $1、全体で $2',
	'timedmedia-wav-pcm-required' => 'アップロードできるのは PCM (パルス符号変調) WAV のみです。',
	'timedmedia-mp4-short-video' => 'MP4 $1 動画ファイル、$2',
	'timedmedia-mp4-long-video' => 'MP4 音声/動画ファイル、$1、長さ $2、$4 × $5 ピクセル、全体で $3',
	'timedmedia-no-player-js' => '申し訳ありませんが、あなたのブラウザーではJavaScriptが無効になっているか、対応しているプレーヤーがありません。<br />
再生するには、<a href="$1">クリップをダウンロード</a>するか、<a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">プレーヤーをダウンロード</a>する必要があります。',
	'timedmedia-more' => 'その他…',
	'timedmedia-dismiss' => '閉じる',
	'timedmedia-download' => 'ファイルをダウンロードする',
	'timedmedia-play-media' => 'メディアを再生する',
	'timedmedia-desc-link' => 'ファイルの詳細',
	'timedmedia-oggThumb-version' => 'OggHandler には oggThumb バージョン $1 またはそれ以降が必要です。',
	'timedmedia-oggThumb-failed' => 'oggThumb によるサムネイル作成に失敗しました。',
	'timedmedia-status' => '状態',
	'timedmedia-status-unknown' => '不明な状態',
	'timedmedia-actions' => '操作',
	'timedmedia-not-ready' => '準備ができていません',
	'timedmedia-percent-done' => '約 $1% 完了',
	'timedmedia-in-job-queue' => '$1前にジョブ キューに追加されました',
	'timedmedia-days' => '{{PLURAL:$1|$1 日}}',
	'timedmedia-hours' => '{{PLURAL:$1|$1 時間}}',
	'timedmedia-minutes' => '{{PLURAL:$1|$1 分}}',
	'timedmedia-seconds' => '{{PLURAL:$1|$1 秒}}',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 ソース',
	'timedmedia-source-file-desc' => 'オリジナル $1 ファイル、$2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'オリジナル $1 ファイル ($2)',
	'timedmedia-derivative-desc-160p.ogv' => '低帯域 Ogg 動画 (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'ウェブ ストリーミング可能 Ogg 動画 (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'ウェブ ストリーミング可能 Ogg 動画 (480P)',
	'timedmedia-derivative-desc-720p.ogv' => '高品質ダウンロード可能 Ogg 動画 (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'ウェブ ストリーミング可能 WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'ウェブ ストリーミング可能 WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'ウェブ ストリーミング可能 WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => '高品質ダウンロード可能 WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'デバイスフレンドリー MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'ウェブ ストリーミング可能 MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD 品質 MP4 (720P)',
	'timedmedia-subtitle-new' => '翻訳の新規作成、または既存の翻訳の編集',
	'timedmedia-subtitle-new-desc' => "言語を選択して、'''{{int:Timedmedia-subtitle-new-go}}'''ボタンを押してください。",
	'timedmedia-subtitle-new-go' => '実行',
	'timedmedia-subtitle-language' => '$1 ($2) 字幕',
	'timedmedia-subtitle-no-video' => '現在の字幕ページに関連付けられた動画はありません。',
	'timedmedia-subtitle-no-subtitles' => '現在、この動画には$1の字幕はありませんが、[{{fullurl:{{FULLPAGENAME}}|action=edit}} このページを編集]して追加できます。',
	'timedmedia-subtitle-remote' => 'このファイルの字幕は$1でホストされています',
	'timedmedia-subtitle-remote-link' => '$2 でこのファイルの[$1 解説ページを閲覧]できます',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 件の動画}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 件の Ogg 動画}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 件の WebM 動画}}',
	'timedmedia-file' => 'ファイル',
);

/** Jutish (jysk)
 * @author Huslåke
 */
$messages['jut'] = array(
	'timedmedia-desc' => 'Håndlær før Ogg Theora og Vorbis filer, ve JavaScript spæler', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 sond file, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 video file, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 media file, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 sond file, duråsje $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 video file, duråsje $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multipleksen audio/video file, $1, duråsje $2, $4×$5 piksler, $3 åverål',
	'timedmedia-ogg-long-general' => 'Ogg $1 media file, duråsje $2, $3',
	'timedmedia-ogg-long-error' => 'Ugyldegt ogg file: $2',
	'timedmedia-more' => 'Mære...',
	'timedmedia-dismiss' => 'Slut',
	'timedmedia-download' => 'Nærlæĝ billet',
	'timedmedia-desc-link' => 'Åver dette file',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author NoiX180
 * @author Pras
 */
$messages['jv'] = array(
	'timedmedia-desc' => 'Sing ngurusi berkas Ogg Theora lan Vorbis mawa pamain JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Berkas swara $1 ogg, $2',
	'timedmedia-ogg-short-video' => 'Berkas vidéo $1 ogg, $2',
	'timedmedia-ogg-short-general' => 'Berkas média $1 ogg, $2',
	'timedmedia-ogg-long-audio' => 'Berkas swara $1 ogg, dawané $2, $3',
	'timedmedia-ogg-long-video' => 'Berkas vidéo $1 ogg, dawané $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Berkas audio/vidéo multiplexed ogg, $1, dawané $2, $4×$5 piksel, $3 gunggungé',
	'timedmedia-ogg-long-general' => 'Berkas média ogg, dawané $2, $3',
	'timedmedia-ogg-long-error' => 'Berkas ogg ora absah: $1',
	'timedmedia-more' => 'Luwih akèh...',
	'timedmedia-dismiss' => 'Tutup',
	'timedmedia-download' => 'Undhuh berkas',
	'timedmedia-play-media' => 'Puter média',
	'timedmedia-desc-link' => 'Prekara berkas iki',
	'timedmedia-oggThumb-version' => 'OggHandler mbutuhaké oggThumb vèrsi $1 utawa sakbanjuré.',
	'timedmedia-oggThumb-failed' => 'oggTumb gagal nggawé gambar mini.',
	'timedmedia-status-header' => 'Status transkodhé',
	'timedmedia-update-status' => 'Anyari status transkodhé',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Status ora dingertèni',
	'timedmedia-transcodeinfo' => 'Katrangan turunan transkodhé',
	'timedmedia-actions' => 'Laku',
	'timedmedia-direct-link' => 'Undhuh turunan',
	'timedmedia-not-ready' => 'Durung siap',
	'timedmedia-completed-on' => 'Nglengkapi transkodhé $1',
	'timedmedia-error-on' => 'Kasalahan nèng transkodhé $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Transkodhé lekas $1 kapungkur. $2',
	'timedmedia-percent-done' => 'Kira-kira $1 rampung',
	'timedmedia-in-job-queue' => 'Nambahaké nèng antrian Pakaryan $1 kapungkur',
	'timedmedia-unknown-target-size' => 'Gedhé patujon oradingertèni, $1 kasandhèkaké',
	'timedmedia-days' => '{{PLURAL:$1|dina|dina}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|jam|jam}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|menit|menit}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|detik|detik}}', # Fuzzy
	'timedmedia-reset' => 'Setèl ulang transkodhé',
	'timedmedia-reset-error' => 'Kasalahan nalika nyetèl ulang tugas transkodhé.',
	'timedmedia-source-file' => 'Sumber $1',
	'timedmedia-source-file-desc' => '$1 asli, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Vidio Ogg bandwidth cilik (160P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Vidio Ogg sing bisa diundhuh mawa kualitas dhuwur (720P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM sing bisa diundhuh mawa kualitas dhuwur (720P)',
	'timedmedia-subtitle-new' => 'Gawé terjemahan anyar utawa sunting sing wis ana',
	'timedmedia-subtitle-new-desc' => "Ganti bagéyan '''$1''' nganggo [[:en:ISO 639|kodhé basa]] Sampéyan lan pencèt tombol '''{{int:Timedmedia-subtitle-new-go}}'''", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Nuju',
	'timedmedia-subtitle-language' => 'Subjudhul $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Ora ana vidio sing cocok karo kaca subjudhul saiki',
	'timedmedia-subtitle-no-subtitles' => 'Sawetara durung ana subjudhul nèng $1 kanggo vidio iki, Sampéyan bisa [{{fullurl:{{FULLPAGENAME}}|action=edit}} nyunting kaca iki] kanggo nambahi',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 vidio|$1 vidio}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 vidio Ogg|$1 vidio Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 vidio WebM|$1 vidio WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transkodhé|$1 transkodhé}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transkodhé lumangsung|$1 transkodhé lumangsung}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transkodhé ngantri|$1 transkodhé ngantri}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transkodhé gagal|$1 transkodhé gagal}}',
	'timedmedia-file' => 'Berkas',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 * @author Malafaya
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'timedmedia-desc' => 'აუდიოს, ვიდეოს და სუბტიტრების დამამუშავებელი, შემდეგი ფორმატების მხარდაჭერით: WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 ხმოვანი ფაილი, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 ვიდეო ფაილი, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 მედია ფაილი, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ხმოვანი ფაილი, სიგრძე $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 ვიდეო ფაილი, სიგრძე $2, $4 × $5 პიქსელი, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg მულტიპლექსური აუდიო/ვიდეო ფაილი, $1, სიგრძე $2, $4 × $5 პიქსელი, $3 სრული',
	'timedmedia-ogg-long-general' => 'Ogg მედია ფაილი, სიგრძე $2, $3',
	'timedmedia-ogg-long-error' => 'არასწორი Ogg-ფაილი: $1',
	'timedmedia-webm-short-video' => 'WebM $1 ვიდეო ფაილი, $2',
	'timedmedia-webm-long-video' => 'WebM აუდიო/ვიდეო ფაილი, $1, სიგრძე $2, $4 × $5 პიქსელი, $3 სრული',
	'timedmedia-mp4-short-video' => 'MP4 $1 ვიდეო ფაილი, $2',
	'timedmedia-mp4-long-video' => 'MP4 აუდიო/ვიდეო ფაილი, $1, სიგრძე $2, $4 × $5 პიქსელი, $3 სრული',
	'timedmedia-no-player-js' => 'სამწუხაროდ, თქვენ ბრაუზერში გამორთულია JavaScript ან არ არის საჭირო დამკვრელი.<br />
თქვენ შეგიძლიათ <a href="$1">გადმოწეროთ კლიპი</a> ან <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">გადმოწეროთ დამკვრელი</a> კლიპის ბრაუზერში დასაკრავად.',
	'timedmedia-more' => 'მეტი...',
	'timedmedia-dismiss' => 'დახურვა',
	'timedmedia-download' => 'ფაილის ჩამოტვირთვა',
	'timedmedia-play-media' => 'მედია-ფაილის დაკვრა',
	'timedmedia-desc-link' => 'ამ ფაილის შესახებ',
	'timedmedia-oggThumb-version' => 'OggHandler-ს სჭირდება oggThumb-ის ვერსია $1 ან უფრო გვიანდელი.',
	'timedmedia-oggThumb-failed' => 'oggThumb-მა ვერ მოახერხა მინიატიურის შექმნა.',
	'timedmedia-status-header' => 'დეკოდირების სტატუსი',
	'timedmedia-update-status' => 'დეკოდირების სტატუსის განახლება',
	'timedmedia-status' => 'სტატუსი',
	'timedmedia-status-unknown' => 'უცნობი სტატუსი',
	'timedmedia-transcodeinfo' => 'საწარმოო დეკოდირების აღწერა',
	'timedmedia-actions' => 'მოქმედება',
	'timedmedia-direct-link' => 'მოდიფიცირებული ვარიანტის გადმოწერა',
	'timedmedia-not-ready' => 'არაა მზად',
	'timedmedia-completed-on' => '$1-ის დეკოდირება დასრულებულია',
	'timedmedia-error-on' => 'შეცდომა დეკოდირებისას $1-ზე.', # Fuzzy
	'timedmedia-started-transcode' => 'დეკოდირება გაშვებულია $1 წინ. $2',
	'timedmedia-percent-done' => 'დაახლოებით $1% შესრულებულია',
	'timedmedia-in-job-queue' => 'დამატებულია დავალებების რიგში $1 წინ',
	'timedmedia-unknown-target-size' => 'უცნობი სამიზნო ზომა, $1 კოდირებისას',
	'timedmedia-days' => '{{PLURAL:$1|1 დღე|$1 დღე}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 საათი|$1 საათი}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 წუთი|$1 წუთი}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 წამი|$1 წამი}}',
	'timedmedia-reset' => 'დეკოდირების თავიდან დაყენება',
	'timedmedia-reset-confirm' => 'დეკოდირების თავიდან დაყენება წაშლის არსებულ ფაილს (თუკი ის არსებობს) და დეკოდირება კვლავ დაემატება დავალებების რიგში. განმეორებით დეკოდირებას დაჭირდება გარკვეული დრო. <br /><br />
დარწმუნებული ხართ, რომ გსურთ გააგრძელოთ?',
	'timedmedia-reset-error' => 'შეცდომა დეკოდირების თავიდან დაყენებისას.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'წყარო $1',
	'timedmedia-source-file-desc' => 'ორიგინალი $1 ფაილი, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'ორიგინალი $1 ფაილი ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'დაბალი ხარისხის Ogg-ვიდეო (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'ვებ-ნაკადური Ogg-ვიდეო (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'ვებ-ნაკადური Ogg-ვიდეო (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'მაღალი ხარისხის გადმოწერადი Ogg-ვიდეო (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'ვებ-ნაკადური WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'ვებ-ნაკადური WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'ვებ-ნაკადური WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'მაღალი ხარისხის გადმოწერადი WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'მეგობრული-მოწყობილობა MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'ვებ-ნაკადური MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD ხარისხი MP4 (720P)',
	'timedmedia-subtitle-new' => 'შექმენით ახალი თარგმანი ან დაარედაქტირეთ არსებული',
	'timedmedia-subtitle-new-desc' => "აირჩიეთ ენა და დააჭირეთ ღილაკს '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'მიდი',
	'timedmedia-subtitle-language' => '$1 ($2) სუბტიტრები',
	'timedmedia-subtitle-no-video' => 'აქ არ არის ვიდეო, რომელიც დაკავშირებულია სუბტიტრების მიმდინარე გვერდთან',
	'timedmedia-subtitle-no-subtitles' => 'ამჟამად $1 სუბტიტრები ამ ვიდეოსათვის არ არის, თქვენ შეგიძლიათ [{{fullurl:{{FULLPAGENAME}}|action=edit}} შეცვალოთ ეს გვერდი] მათ დასამატებლად',
	'timedmedia-subtitle-remote' => 'ამ ფაილის დროებითი ტექსტი განთავსებულია $1-ზე',
	'timedmedia-subtitle-remote-link' => 'თქვენ შეგიძლიათ [$1 იხილოთ ამ ფაილის აღწერის გვერდი] $2-ზე',
	'timedmediahandler' => 'დროული მედია მართვის პროგრამა',
	'timedmedia-videos' => '{{PLURAL:$1|$1 ვიდეო|$1 ვიდეო}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg ვიდეო|$1 Ogg ვიდეო}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM ვიდეო|$1 WebM ვიდეო}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 დეკოდირებული|$1 დეკოდირებული}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|მიმდინარეობს $1 დეკოდირება|მიმდინარეობს $1 დეკოდირება}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|რიგშია $1 დეკოდირება|რიგშია $1 დეკოდირება}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 დეკოდირება ჩაიშალა|$1 დეკოდირება ჩაიშალა}}',
	'timedmedia-file' => 'ფაილი',
	'right-transcode-status' => 'იხილეთ [[Special:TimedMediaHandler|ინფორმაცია მიმდინარე დეკოდირების შესახებ]]',
	'action-transcode-status' => 'იხილეთ მიმდინარე დეკოდირების სტატუსი',
);

/** Kazakh (Arabic script) (قازاقشا (تٴوتە)‏)
 */
$messages['kk-arab'] = array(
	'timedmedia-ogg-short-audio' => 'Ogg $1 دىبىس فايلى, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 بەينە فايلى, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 تاسپا فايلى, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 دىبىس فايلى, ۇزاقتىعى $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 بەينە فايلى, ۇزاقتىعى $2, $4 × $5 پىيكسەل, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg قۇرامدى دىبىس/بەينە فايلى, $1, ۇزاقتىعى $2, $4 × $5 پىيكسەل, $3 نە بارلىعى',
	'timedmedia-ogg-long-general' => 'Ogg تاسپا فايلى, ۇزاقتىعى $2, $3',
	'timedmedia-ogg-long-error' => 'جارامسىز ogg فايلى: $1',
	'timedmedia-more' => 'كوبىرەك...',
	'timedmedia-dismiss' => 'جابۋ',
	'timedmedia-download' => 'فايلدى جۇكتەۋ',
	'timedmedia-desc-link' => 'بۇل فايل تۋرالى',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 */
$messages['kk-cyrl'] = array(
	'timedmedia-ogg-short-audio' => 'Ogg $1 дыбыс файлы, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 бейне файлы, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 таспа файлы, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 дыбыс файлы, ұзақтығы $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 бейне файлы, ұзақтығы $2, $4 × $5 пиксел, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg құрамды дыбыс/бейне файлы, $1, ұзақтығы $2, $4 × $5 пиксел, $3 не барлығы',
	'timedmedia-ogg-long-general' => 'Ogg таспа файлы, ұзақтығы $2, $3',
	'timedmedia-ogg-long-error' => 'Жарамсыз ogg файлы: $1',
	'timedmedia-more' => 'Көбірек...',
	'timedmedia-dismiss' => 'Жабу',
	'timedmedia-download' => 'Файлды жүктеу',
	'timedmedia-desc-link' => 'Бұл файл туралы',
);

/** Kazakh (Latin script) (qazaqşa (latın)‎)
 */
$messages['kk-latn'] = array(
	'timedmedia-ogg-short-audio' => 'Ogg $1 dıbıs faýlı, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 beýne faýlı, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 taspa faýlı, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 dıbıs faýlı, uzaqtığı $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 beýne faýlı, uzaqtığı $2, $4 × $5 pïksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg quramdı dıbıs/beýne faýlı, $1, uzaqtığı $2, $4 × $5 pïksel, $3 ne barlığı',
	'timedmedia-ogg-long-general' => 'Ogg taspa faýlı, uzaqtığı $2, $3',
	'timedmedia-ogg-long-error' => 'Jaramsız ogg faýlı: $1',
	'timedmedia-more' => 'Köbirek...',
	'timedmedia-dismiss' => 'Jabw',
	'timedmedia-download' => 'Faýldı jüktew',
	'timedmedia-desc-link' => 'Bul faýl twralı',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author T-Rithy
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'timedmedia-desc' => 'គាំទ្រចំពោះ Ogg Theora និង Vorbis files, ជាមួយ ឧបករណ៍អាន JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'ឯកសារ សំឡេង Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'ឯកសារវីដេអូ Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'ឯកសារមេឌាOgg $1, $2',
	'timedmedia-ogg-long-audio' => 'ឯកសារសំឡេងប្រភេទOgg $1, រយៈពេល$2 និងទំហំ$3',
	'timedmedia-ogg-long-video' => 'ឯកសារវីដេអូប្រភេទOgg $1, រយៈពេល$2, $4×$5px, $3',
	'timedmedia-ogg-long-multiplexed' => 'ឯកសារអូឌីយ៉ូ/វីដេអូចម្រុះប្រភេទOgg , $1, រយៈពេល$2, $4×$5px, ប្រហែល$3',
	'timedmedia-ogg-long-general' => 'ឯកសារមេឌាប្រភេទOgg, រយៈពេល$2, $3',
	'timedmedia-ogg-long-error' => 'ឯកសារ ogg មិនមាន សុពលភាព ៖ $1',
	'timedmedia-more' => 'បន្ថែម...',
	'timedmedia-dismiss' => 'បិទ',
	'timedmedia-download' => 'ទាញយកឯកសារ',
	'timedmedia-desc-link' => 'អំពីឯកសារនេះ',
);

/** Korean (한국어)
 * @author ITurtle
 * @author Kwj2772
 * @author ToePeu
 * @author 아라
 */
$messages['ko'] = array(
	'timedmedia-desc' => 'WebM, OGG Theora, Vorbis, srt를 위한 포맷 지원과 소리, 동영상과 자막을 위한 핸들러',
	'timedmedia-ogg-short-audio' => 'Ogg $1 소리 파일, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 동영상 파일, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 미디어 파일, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 소리 파일, 길이 $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 동영상 파일, 길이 $2, $4 × $5 픽셀, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg 다중 소리/동영상 파일, $1, 길이 $2, $4 × $5 픽셀, 대략 $3',
	'timedmedia-ogg-long-general' => 'Ogg 미디어 파일, 길이 $2, $3',
	'timedmedia-ogg-long-error' => '잘못된 ogg 파일: $1',
	'timedmedia-webm-short-video' => 'WebM $1 동영상 파일, $2',
	'timedmedia-webm-long-video' => 'WebM 소리/동영상 파일, $1, 길이 $2, $4 × $5픽셀, 대략 $3',
	'timedmedia-flac-short-audio' => 'FLAC 소리 파일, $1',
	'timedmedia-flac-long-audio' => 'FLAC 소리 파일, 길이 $1, 대략 $2',
	'timedmedia-wav-short-audio' => 'WAV 소리 파일, $1',
	'timedmedia-wav-long-audio' => 'WAV 소리 파일, 길이 $1, 대략 $2',
	'timedmedia-wav-pcm-required' => 'PCM(펄스 부호 변조) WAV만 올릴 수 있습니다.',
	'timedmedia-mp4-short-video' => 'MP4 $1 동영상 파일, $2',
	'timedmedia-mp4-long-video' => 'MP4 소리/동영상 파일, $1, 길이 $2, $4 × $5픽셀, 대략 $3',
	'timedmedia-no-player-js' => '죄송합니다, 시스템은 자바스크립트를 지원하지 않거나 지원하는 미디어 플레이어가 설치되어 있지 않습니다.<br />
<a href="$1">미디어 클립을 다운로드</a>하거나, <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">미디어 플레이어를 다운로드</a>할 수 있습니다.',
	'timedmedia-more' => '더 보기…',
	'timedmedia-dismiss' => '닫기',
	'timedmedia-download' => '파일 다운로드',
	'timedmedia-play-media' => '미디어 재생',
	'timedmedia-desc-link' => '파일 정보',
	'timedmedia-oggThumb-version' => 'OggHandler는 oggThumb 버전 $1 이상을 요구합니다.',
	'timedmedia-oggThumb-failed' => 'oggThumb가 섬네일을 만들지 못했습니다.',
	'timedmedia-status-header' => '코드 변환 상태',
	'timedmedia-update-status' => '코드 변환 상태 업데이트',
	'timedmedia-status' => '상태',
	'timedmedia-status-unknown' => '알 수 없는 상태',
	'timedmedia-transcodeinfo' => '코드 변환 파생 설명',
	'timedmedia-actions' => '행위',
	'timedmedia-direct-link' => '파생 다운로드',
	'timedmedia-not-ready' => '준비하지 않음',
	'timedmedia-completed-on' => '$1 코드 변환 완료',
	'timedmedia-error-on' => '$1에 코드 변환하는 데 오류',
	'timedmedia-started-transcode' => '$1 전에 코드 변환을 시작했습니다. $2',
	'timedmedia-percent-done' => '약 $1% 완료',
	'timedmedia-in-job-queue' => '$1 전에 작업 대기열에 추가됨',
	'timedmedia-unknown-target-size' => '알 수 없는 대상 크기, $1 인코드함',
	'timedmedia-days' => '{{PLURAL:$1|1일|$1일}}',
	'timedmedia-hours' => '{{PLURAL:$1|1시간|$1시간}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1분|$1분}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1초|$1초}}',
	'timedmedia-reset' => '코드 변환 초기화',
	'timedmedia-reset-confirm' => '코드 변환을 초기화하면 기존 파일이 (있는 경우) 제거되며, 작업 대기열로 코드 변환을 다시 추가합니다. 다시 변환하는 데 다소 시간이 걸릴 것입니다. <br /><br />
계속하겠습니까?',
	'timedmedia-reset-error' => '코드 변환 작업을 초기화하는 데 오류가 났습니다.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 원본',
	'timedmedia-source-file-desc' => '원본 $1 파일, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => '원본 $1 파일 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => '낮은 대역폭 Ogg 비디오 (160P)',
	'timedmedia-derivative-desc-360p.ogv' => '웹 스트리밍 가능 Ogg 동영상 (360P)',
	'timedmedia-derivative-desc-480p.ogv' => '웹 스트리밍 가능 Ogg 동영상 (480P)',
	'timedmedia-derivative-desc-720p.ogv' => '고화질 다운로드 가능 Ogg 동영상 (720P)',
	'timedmedia-derivative-desc-160p.webm' => '웹 스트리밍 가능 WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => '웹 스트리밍 가능 WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => '웹 스트리밍 가능 WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => '고화질 다운로드 가능 WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => '장치 친화적 MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => '웹 스트리밍 가능 MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD 품질 MP4 (720P)',
	'timedmedia-subtitle-new' => '새 번역 만들기 또는 기존 번역 편집',
	'timedmedia-subtitle-new-desc' => "언어를 선택하고 '''{{int:Timedmedia-subtitle-new-go}}''' 버튼을 누르세요",
	'timedmedia-subtitle-new-go' => '가기',
	'timedmedia-subtitle-language' => '$1 ($2) 자막',
	'timedmedia-subtitle-no-video' => '현재 자막 페이지와 관련된 동영상이 없습니다',
	'timedmedia-subtitle-no-subtitles' => '현재 이 동영상에 대한 $1에 자막이 없습니다, 추가하려면 [{{fullurl:{{FULLPAGENAME}}|action=edit}} 이 문서를 편집할] 수 있습니다.',
	'timedmedia-subtitle-remote' => '이 파일에 대한 자막은 $1에 호스트했습니다',
	'timedmedia-subtitle-remote-link' => '$2에 이 파일에 대한 [$1 설명 문서를 볼] 수 있습니다',
	'timedmediahandler' => '자막미디어핸들러',
	'timedmedia-videos' => '{{PLURAL:$1|동영상 $1개}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|Ogg 동영상 $1개}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|WebM 동영상 $1개}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|코드 변환 $1개}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|실행 중인 코드 변환 $1개}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|대기 중인 코드 변환 $1개}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|실패한 코드 변환 $1개}}',
	'timedmedia-file' => '파일',
	'right-transcode-reset' => '초기화를 실패했거나 동영상이 코드 변환했기 때문에 다시 작업 대기열에 삽입됩니다.',
	'right-transcode-status' => '[[Special:TimedMediaHandler|현재 코드 변환 활동에 대한 정보]] 보기',
	'action-transcode-status' => '현재 코드 변환 상태 보기',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'timedmedia-more' => 'Кёбюрек…',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'timedmedia-more' => 'Raku pa...',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'timedmedia-desc' => 'E Projamm (<i lang="en">handler</i>) för Meedije met Zickaandeil
— Viddejos, Tondatteieje, <i lang="en">timedText</i> (Ongertittelle) —
met Ongershtözung för de Fommaate <i lang="en">WebM</i>, <i lang="en">Ogg Theora</i>, <i lang="en">Vorbis</i> un <i lang="en">srt</i>.',
	'timedmedia-ogg-short-audio' => '<i lang="en">Ogg $1</i> Tondatei, $2',
	'timedmedia-ogg-short-video' => '<i lang="en">Ogg $1</i> Viddejodatei, $2',
	'timedmedia-ogg-short-general' => '<i lang="en">Ogg $1</i> Medijedatei, $2',
	'timedmedia-ogg-long-audio' => '<i lang="en">Ogg $1</i> Tondatei fum Ömfang $2, $3',
	'timedmedia-ogg-long-video' => '<i lang="en">Ogg $1</i> Viddejodatei fum Ömfang $2 un {{PLURAL:$4|ein Pixel|$4 Pixelle|kei Pixel}} × {{PLURAL:$5|ei Pixel|$4 Pixelle|kei Pixel}}, $3',
	'timedmedia-ogg-long-multiplexed' => '<i lang="en">Ogg</i> jemultipex Ton- un Viddejodatei, $1, fum Ömfang $2 un {{PLURAL:$4|ein Pixel|$4 Pixelle|kei Pixel}} × {{PLURAL:$5|ei Pixel|$4 Pixelle|kei Pixel}}, $3 ennsjesammp',
	'timedmedia-ogg-long-general' => '<i lang="en">Ogg</i> Medijedatei fum Ömfang $2, $3',
	'timedmedia-ogg-long-error' => 'En kapodde <i lang="en">Ogg</i>-Dattei: $1',
	'timedmedia-webm-short-video' => 'En $1 Viddejo-Dattei em WebM-Fommaat vun $2',
	'timedmedia-webm-long-video' => 'Ene Viddejo udder en Toondattei em WebM-Fommaat, $1, $2 jruuß, $4 × $5 Pixelle, $3 enßjesammp',
	'timedmedia-no-player-js' => 'Schad, Dinge Brauser hät entweder JavaSkrepp ußjeschalldt udder kein zopaß Projramm zom Afschpelle.<br />Do kanns jäz <a href="$1">dat Stöck eronger laade</a> udder <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">e Afspeller-Projramm eronger laade</a>, öm dat Schtöck en Dingem Brauser afzeschpelle.',
	'timedmedia-more' => 'Enshtelle&nbsp;…',
	'timedmedia-dismiss' => 'Zohmaache!',
	'timedmedia-download' => 'Datei erunger lade',
	'timedmedia-play-media' => 'Afshpelle',
	'timedmedia-desc-link' => 'Övver di Datei',
	'timedmedia-oggThumb-version' => 'Dä <code lang="en">OggHandler</code> bruch <code lang="en">oggThumb</code> in dä Version $1 udder hüüter.',
	'timedmedia-oggThumb-failed' => '<code lang="en">oggThumb</code> kunnt kei MiniBelldsche maache.',
	'timedmedia-source-file' => 'Quell-Dattei em $1-Fommaat',
	'timedmedia-source-file-desc' => 'Ojinaal $1-Dattei, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'En Viddejo-Dattei met winnesch Bandbreide (160P) em <i lang="en">Ogg</i>-Fommaat',
	'timedmedia-derivative-desc-360p.ogv' => 'En Viddejo-Dattei em <i lang="en">Ogg</i>-Fommaat (360p) för ene Dahteshtrohm övver et Nez',
	'timedmedia-derivative-desc-480p.ogv' => 'En Viddejo-Dattei (met 480p) em <i lang="en">Ogg</i>-Fommaat för ene Dahteshtrohm övver et Nez',
	'timedmedia-derivative-desc-720p.ogv' => 'En Viddejo-Dattei met huhe Qualiteit (met 720p) em <i lang="en">Ogg</i>-Fommaat zom eronger laade',
	'timedmedia-derivative-desc-360p.webm' => 'Ene WebM Viddejo (met 360p) för ene Dahteshtrohm övver et Nez',
	'timedmedia-derivative-desc-480p.webm' => 'Ene WebM Viddejo (met 480p) för ene Dahteshtrohm övver et Nez',
	'timedmedia-derivative-desc-720p.webm' => 'En <i lang="en">WebM</i> Viddejo-Dattei met huhe Qualiteit (met 720p) zom eronger laade',
	'timedmedia-subtitle-language' => 'Ongertittele en $1 ($2)',
);

/** Latin (Latina)
 * @author SPQRobin
 * @author UV
 */
$messages['la'] = array(
	'timedmedia-more' => 'Plus…',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'timedmedia-desc' => "Steierungsprogramm fir Audio, Video an 'timed text', mat Ënnerstëtzung vun de Formater WebM, Ogg Theora, Vorbis, srt",
	'timedmedia-ogg-short-audio' => 'Ogg-$1-Tounfichier, $2',
	'timedmedia-ogg-short-video' => 'Ogg-$1-Videofichier, $2',
	'timedmedia-ogg-short-general' => 'Ogg-$1-Mediefichier, $2',
	'timedmedia-ogg-long-audio' => 'tmh-$1-Tounfichier, Dauer: $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg-$1-Videofichier, Dauer: $2, $4×$5 Pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-Toun-/Video-Fichier, $1, Dauer: $2, $4×$5 Pixel, $3',
	'timedmedia-ogg-long-general' => 'Ogg Media-Fichier, Dauer $2, $3',
	'timedmedia-ogg-long-error' => 'Ongëltegen Ogg-Fichier: $1',
	'timedmedia-webm-short-video' => 'WebM $1 Video Fichier, $2',
	'timedmedia-webm-long-video' => 'WebM-Audio/Video-Fichier, $1, Dauer $2, $4×$5 Pixel, $3 am Ganzen',
	'timedmedia-flac-short-audio' => 'FLAC-Audiofichier, $1',
	'timedmedia-flac-long-audio' => 'FLAC-audiofichier, Längt $1, $2 am Ganzen',
	'timedmedia-wav-short-audio' => 'WAV-Audiofichier, $1',
	'timedmedia-mp4-short-video' => 'MP4 $1 Videofichier, $2',
	'timedmedia-no-player-js' => 'Pardon, Äre Browser huet entweder JavaScript ausgeschalt oder en huet kee Player-Programm deen ënnerstëtzt gëtt.<br />
Dir kënnt <a href="$1"> de Clip eroflueden</a> oder <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">e Player-Programm erofluede</a> fir de Clip an Ärem Browser ze spillen.',
	'timedmedia-more' => 'Méi ...',
	'timedmedia-dismiss' => 'Zoumaachen',
	'timedmedia-download' => 'Fichier eroflueden',
	'timedmedia-desc-link' => 'Iwwer dëse Fichier',
	'timedmedia-oggThumb-version' => "Den OggHandler brauch d'Versioun $1 (oder méi eng nei Versioun) vun OggThumb.",
	'timedmedia-oggThumb-failed' => "oggThumb konnt d'Miniaturbild (thumbnail) net uleeën.",
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Onbekannte Status',
	'timedmedia-actions' => 'Aktiounen',
	'timedmedia-not-ready' => 'Net fäerdeg',
	'timedmedia-percent-done' => 'Ongeféier $1% fäerdeg',
	'timedmedia-days' => '{{PLURAL:$1|1 Dag|$1 Deeg}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 Stonn|$1 Stonnen}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 Minutt|$1 Minutten}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 Sekonn|$1 Sekonnen}}',
	'timedmedia-reset' => 'Transcode zrécksetzen',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Quell ($1)',
	'timedmedia-source-file-desc' => 'Original $1 Fichier, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Original $1 Fichier ($2)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD-Qualitéit MP4 (720P)',
	'timedmedia-subtitle-new' => 'Nei Iwwersetzung maachen oder eng déi et gëtt änneren',
	'timedmedia-subtitle-new-desc' => "Sicht d'Sprooch eraus an dréckt de Knäppchen ''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Lass',
	'timedmedia-subtitle-language' => '$1 ($2) Ënnertitelen',
	'timedmedia-subtitle-no-video' => 'Et ass kee Video mat der aktueller Säit vun Ënnertitelen associéiert.',
	'timedmedia-subtitle-no-subtitles' => 'Et sinn elo keng Ënnertitelen op $1 fir dëse Video, Dir kënnt [{{fullurl:{{FULLPAGENAME}}|action=edit}} dës Säit änneren] fir se derbäizesetzen',
	'timedmedia-subtitle-remote-link' => "Dir kënnt [$1 d'Beschreiwungssäit] fir dëse Fichier op $2 gesinn",
	'timedmedia-videos' => '{{PLURAL:$1|$1 Video|$1 Videoen}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg Video|$1 Ogg Videoen}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM Video|$1 WebM Videoen}}',
	'timedmedia-file' => 'Fichier',
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Malafaya
 */
$messages['lfn'] = array(
	'timedmedia-more' => 'Plu…',
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'timedmedia-desc' => "Handelt Ogg Theora- en Vorbis-bestande aaf met 'n JavaScript-mediaspeler", # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 geluidsbestandj, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videobestandj, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 mediabestandj, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 geluidsbestandj, lingdje $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videobestandj, lingdje $2, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg gemultiplexeerd geluids-/videobestandj, $1, lingdje $2, $4×$5 pixels, $3 totaal',
	'timedmedia-ogg-long-general' => 'Ogg mediabestandj, lingdje $2, $3',
	'timedmedia-ogg-long-error' => 'Óngeljig oggg-bestandj: $1',
	'timedmedia-more' => 'Mieë...',
	'timedmedia-dismiss' => 'Sloet',
	'timedmedia-download' => 'Bestandj downloade',
	'timedmedia-desc-link' => 'Euver dit bestandj',
);

/** Lithuanian (lietuvių)
 * @author Homo
 * @author Matasg
 */
$messages['lt'] = array(
	'timedmedia-desc' => 'Įrankis groti Ogg Theora ir Vorbis failus su JavaScript grotuvu', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 garso byla, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 video byla, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 medija byla, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 garso byla, ilgis $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 video byla, ilgis $2, $4×$5 pikseliai, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg sutankinta audio/video byla, $1, ilgis $2, $4×$5 pikseliai, $3 viso',
	'timedmedia-ogg-long-general' => 'Ogg media byla, ilgis $2, $3',
	'timedmedia-ogg-long-error' => 'Bloga ogg byla: $1',
	'timedmedia-more' => 'Daugiau...',
	'timedmedia-dismiss' => 'Uždaryti',
	'timedmedia-download' => 'Atsisiųsti bylą',
	'timedmedia-desc-link' => 'Apie šią bylą',
);

/** Latvian (latviešu)
 * @author Papuass
 * @author Xil
 */
$messages['lv'] = array(
	'timedmedia-more' => 'Vairāk...',
	'timedmedia-dismiss' => 'Aizvērt',
	'timedmedia-download' => 'Lejupielādēt failu',
	'timedmedia-desc-link' => 'Par šo failu',
	'timedmedia-status' => 'Statuss',
	'timedmedia-status-unknown' => 'Nezināms statuss',
	'timedmedia-actions' => 'Darbības',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 avots',
	'timedmedia-subtitle-new-go' => 'Aiziet!',
	'timedmedia-subtitle-language' => '$1 ($2) subtitri',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'timedmedia-transcodeinfo' => 'Deskripsi turunan transkoder',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160p',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360p',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480p',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720p',
	'timedmedia-derivative-160p.webm' => 'WebM 160p',
	'timedmedia-derivative-360p.webm' => 'WebM 360p',
	'timedmedia-derivative-480p.webm' => 'WebM 480p',
	'timedmedia-derivative-720p.webm' => 'WebM 720p',
	'timedmedia-derivative-320p.mp4' => 'H264 320p',
	'timedmedia-derivative-480p.mp4' => 'H264 480p',
	'timedmedia-derivative-720p.mp4' => 'H264 720p',
	'timedmedia-derivative-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-desc-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-opus' => 'Opus',
	'timedmedia-derivative-desc-opus' => 'Opus',
	'timedmedia-derivative-mp3' => 'MP3',
	'timedmedia-derivative-desc-mp3' => 'MP3',
	'timedmedia-derivative-m4a' => 'AAC',
	'timedmedia-derivative-desc-m4a' => 'AAC',
	'timedmediahandler' => 'Daftar berkas media',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'timedmedia-desc' => 'Обработувач за аудио, видео и синхронизиран текст, со поддршка за форматите WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 звучна податотека, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 видеоснимка, $2',
	'timedmedia-ogg-short-general' => 'Мултимедијална податотека Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 звучна податотека, времетраење $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 видео податотека, времетраење $2, $4 × $5 пиксели, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg мултиплексирана аудио/видео снимка, $1, времетраење $2, $4 × $5 пиксели, вкупно $3',
	'timedmedia-ogg-long-general' => 'Мултимедијална податотека Ogg, времетраење $2, $3',
	'timedmedia-ogg-long-error' => 'Оштетена Ogg-податотека: $1',
	'timedmedia-webm-short-video' => 'WebM $1 видеоснимка, $2',
	'timedmedia-webm-long-video' => 'WebM аудио/видео снимка, $1, должина: $2, $4 × $5 пиксели, вкупно $3',
	'timedmedia-flac-short-audio' => 'Аудиоподатотека FLAC, $1',
	'timedmedia-flac-long-audio' => 'Аудиоподатотека FLAC, траење: $1, вкупно $2',
	'timedmedia-wav-short-audio' => 'Аудиоподатотека WAV, $1',
	'timedmedia-wav-long-audio' => 'Аудиоподатотека WAV, траење: $1, вкупно $2',
	'timedmedia-wav-pcm-required' => 'Можете да подигате само WAV-податотеки со PCM (импулсна кодна модулација).',
	'timedmedia-mp4-short-video' => 'MP4 $1 видеоснимка, $2',
	'timedmedia-mp4-long-video' => 'MP4 аудио/видео снимка, $1, времетраење $2, $4 × $5 пиксели, вкупно $3',
	'timedmedia-no-player-js' => 'Нажалост, вашиот прелистувач или има оневозможено JavaScript, или нема ниту еден поддржан изведувач.<br />
Можете да го <a href="$1">преземете клипот</a> или <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">да преземете изведувач</a> за да ја пуштите снимката во вашиот прелистувач.',
	'timedmedia-more' => 'Повеќе...',
	'timedmedia-dismiss' => 'Затвори',
	'timedmedia-download' => 'Преземи податотека',
	'timedmedia-play-media' => 'Пушти снимка',
	'timedmedia-desc-link' => 'Информации за податотеката',
	'timedmedia-oggThumb-version' => 'OggHandler бара oggThumb верзија $1 или понова.',
	'timedmedia-oggThumb-failed' => 'oggThumb не успеа да ја создаде минијатурата.',
	'timedmedia-status-header' => 'Статус на прекодирањето',
	'timedmedia-update-status' => 'Поднови статус на прекодирање',
	'timedmedia-status' => 'статус',
	'timedmedia-status-unknown' => 'Непознат статус',
	'timedmedia-transcodeinfo' => 'Опис на изводот од прекодирањето',
	'timedmedia-actions' => 'Дејства',
	'timedmedia-direct-link' => 'Преземи изведено',
	'timedmedia-not-ready' => 'Не е готово',
	'timedmedia-completed-on' => 'Прекодирањето е завршено $1',
	'timedmedia-error-on' => 'Грешка при прекодирањето на $1',
	'timedmedia-started-transcode' => 'Прекодирањето започна пред $1. $2',
	'timedmedia-percent-done' => 'Сработено: околу $1%',
	'timedmedia-in-job-queue' => 'Додадено во редицата на задачи пред $1',
	'timedmedia-unknown-target-size' => 'Непозната целна големина. $1 е шифрирано',
	'timedmedia-days' => '{{PLURAL:$1|1 ден|$1 дена}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 час|$1 часа}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 минута|$1 минути}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 секунда|$1 секунди}}',
	'timedmedia-reset' => 'Одново',
	'timedmedia-reset-confirm' => 'Враќајќи го ова прекодирање одново ќе ја отстраните постоечката податотека (ако ја има) и ќе го вратите прекодирањето во редицата на задачи. Повторното прекодирање ќе потрае. <br /><br />Дали сте сигурни дека сакате да продолжите?',
	'timedmedia-reset-error' => 'Грешка при повторното пуштање на транскодирањето.',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Извор на $1',
	'timedmedia-source-file-desc' => 'Оригинална $1-податотека, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Оригинална $1-податотека ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160п',
	'timedmedia-derivative-desc-160p.ogv' => 'Нископропусно Ogg-видео (160п)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360п',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg-видео за емитување (360 пиксели)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480п',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg-видео за емитување (480 пиксели)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720п',
	'timedmedia-derivative-desc-720p.ogv' => 'Висококвалитетно Ogg-видео за преземање (720п)',
	'timedmedia-derivative-160p.webm' => 'WebM 160п',
	'timedmedia-derivative-desc-160p.webm' => 'WebM за каналско емитување (160п)',
	'timedmedia-derivative-360p.webm' => 'WebM 360п',
	'timedmedia-derivative-desc-360p.webm' => 'WebM за каналско емитување (360п)',
	'timedmedia-derivative-480p.webm' => 'Висококвалитетен WebM за преземање (720п)',
	'timedmedia-derivative-desc-480p.webm' => 'Висококвалитетен WebM за преземање (720п)',
	'timedmedia-derivative-720p.webm' => 'WebM 720п',
	'timedmedia-derivative-desc-720p.webm' => 'Висококвалитетен WebM за преземање (720п)',
	'timedmedia-derivative-320p.mp4' => 'H264 320п',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 за уреди (320п)',
	'timedmedia-derivative-480p.mp4' => 'H264 480п',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 за каналско емитување (480п)',
	'timedmedia-derivative-720p.mp4' => 'H264 720п',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4-снимка со HD-квалитет (720п)',
	'timedmedia-subtitle-new' => 'Создај нов превод или измени постоечки',
	'timedmedia-subtitle-new-desc' => "Изберете јазик и стиснете на копчето '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Оди',
	'timedmedia-subtitle-language' => '$1 ($2) титлови',
	'timedmedia-subtitle-no-video' => 'Нема видеоснимка поврзана со тековната страница со титлови',
	'timedmedia-subtitle-no-subtitles' => 'Моментално нема $1 титлови за оваа видеоснимка. Можете да ги додадете [{{fullurl:{{FULLPAGENAME}}|action=edit}} уредувајќи ја страницава]',
	'timedmedia-subtitle-remote' => 'Синхронизираниот текст за податотекава е вдомен во $1',
	'timedmedia-subtitle-remote-link' => 'Можете да ја [$1 погледате описната страниац] на податотекава на $2',
	'timedmediahandler' => 'ПоставувачНаУсогласениСнимки',
	'timedmedia-videos' => '{{PLURAL:$1|$1 видео|$1 видеа}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg-видео|$1 Ogg-видеа}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM-видео|$1 WebM-видеа}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 прекодирање|$1 прекодирања}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 прекодирање во тек|$1 прекодирања во тек}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 прекодирање во редица на чекање|$1 прекодирања во редица на чекање}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 неуспешно прекодирање|$1 неуспешни прекодирања}}',
	'timedmedia-file' => 'Податотека',
	'right-transcode-reset' => 'Презадавањето не успеа или има прекодирани видеа, па затоа повторно се ставени во редицата на задачи.',
	'right-transcode-status' => 'Преглед на [[Special:TimedMediaHandler|информации за тековните активности во прекодирањето]]',
	'action-transcode-status' => 'преглед на тековниот статус на прекодирањето',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 * @author Vssun
 */
$messages['ml'] = array(
	'timedmedia-desc' => 'ഓഗ് തിയോറ, വോർബിസ്, എസ്.ആർ.ടി, വെബ്എം തുടങ്ങിയവയ്ക്കുള്ള പിന്തുണയടക്കമുള്ള ശബ്ദ, ചലച്ചിത്ര, സമയമനുസരിച്ച് പ്രദർശിപ്പിക്കുന്ന എഴുത്തുകൾ എന്നിവയ്ക്കുള്ള കൈകാര്യോപകരണം',
	'timedmedia-ogg-short-audio' => 'ഓഗ് $1 ശബ്ദപ്രമാണം, $2',
	'timedmedia-ogg-short-video' => 'ഓഗ് $1 വീഡിയോ പ്രമാണം, $2',
	'timedmedia-ogg-short-general' => 'ഓഗ് $1 മീഡിയ പ്രമാണം, $2',
	'timedmedia-ogg-long-audio' => 'ഓഗ് $1 ശബ്ദ പ്രമാണം, ദൈർഘ്യം $2, $3',
	'timedmedia-ogg-long-video' => 'ഓഗ് $1 വീഡിയോ പ്രമാണം, ദൈർഘ്യം $2, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'ഓഗ് മൾട്ടിപ്ലക്സ്‌‌ഡ് ശബ്ദ/ചലച്ചിത്ര പ്രമാണം, $1, ദൈർഘ്യം $2, $4×$5 ബിന്ദു, ആകെക്കൂടി $3',
	'timedmedia-ogg-long-general' => 'ഓഗ് മീഡിയ പ്രമാണം, ദൈർഘ്യം $2, $3',
	'timedmedia-ogg-long-error' => 'അസാധുവായ ഓഗ് പ്രമാണം: $1',
	'timedmedia-webm-short-video' => 'വെബ്എം $1 ചലച്ചിത്രപ്രമാണം, $2',
	'timedmedia-webm-long-video' => 'വെബ്എം ശബ്ദ/ചലച്ചിത്ര പ്രമാണം, $1, ദൈർഘ്യം $2, $4 × $5 ബിന്ദു, ആകെക്കൂടി $3',
	'timedmedia-flac-short-audio' => 'ഫ്ലാക് ശബ്ദപ്രമാണം, $1',
	'timedmedia-flac-long-audio' => 'ഫ്ലാക് ശബ്ദപ്രമാണം, ദൈർഘ്യം $1, ആകെ $2',
	'timedmedia-wav-short-audio' => 'വേവ് ശബ്ദപ്രമാണം, $1',
	'timedmedia-wav-long-audio' => 'വേവ് ശബ്ദപ്രമാണം, ദൈർഘ്യം $1, ആകെ $2',
	'timedmedia-wav-pcm-required' => 'പി.സി.എം. (പൾസ് ഓഡിയോ മോഡുലേഷൻ) വേവ് മാത്രമേ അപ്‌ലോഡ് ചെയ്യാനാവൂ.',
	'timedmedia-mp4-short-video' => 'എംപി4 $1 വീഡിയോ പ്രമാണം, $2',
	'timedmedia-mp4-long-video' => 'എംപി4 ശബ്ദ/ചലച്ചിത്ര പ്രമാണം, $1, ദൈർഘ്യം $2, $4 × $5 ബിന്ദു, ആകെക്കൂടി $3',
	'timedmedia-no-player-js' => 'ക്ഷമിക്കുക, താങ്കളുടെ ബ്രൗസറിൽ ജാവാസ്ക്രിപ്റ്റ് സജ്ജമാക്കിയിട്ടില്ല അല്ലെങ്കിൽ പിന്തുണയുള്ള പ്ലേയർ ലഭ്യമല്ല.<br />
താങ്കൾക്ക് <a href="$1">ചലച്ചിത്രഭാഗം ഡൗൺലോഡ് ചെയ്യാവുന്നതാണ്</a> അല്ലെങ്കിൽ ബ്രൗസറിൽ പ്രവർത്തിപ്പിക്കാനായി <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">ഒരു പ്ലേയർ ഡൗൺലോഡ് ചെയ്യാവുന്നതാണ്</a>.',
	'timedmedia-more' => 'കൂടുതൽ...',
	'timedmedia-dismiss' => 'അടയ്ക്കുക',
	'timedmedia-download' => 'പ്രമാണം ഡൗൺലോഡ് ചെയ്യുക',
	'timedmedia-play-media' => 'മീഡിയ പ്രവർത്തിപ്പിക്കുക',
	'timedmedia-desc-link' => 'ഈ പ്രമാണത്തെക്കുറിച്ച്',
	'timedmedia-oggThumb-version' => 'ഓഗ്-തമ്പ് പതിപ്പ് $1 അല്ലെങ്കിൽ പുതിയത് ഓഗ്-ഹാൻഡ്ലറിനാവശ്യമാണ്.',
	'timedmedia-oggThumb-failed' => 'ലഘുചിത്രം സൃഷ്ടിക്കുന്നതിൽ ഓഗ്-തമ്പ് പരാജയപ്പെട്ടു.',
	'timedmedia-status-header' => 'ട്രാൻസ്‌കോഡ് സ്ഥിതി',
	'timedmedia-update-status' => 'ട്രാൻസ്‌കോഡ് സ്ഥിതി പുതുക്കുക',
	'timedmedia-status' => 'സ്ഥിതി',
	'timedmedia-status-unknown' => 'അപരിചിതമായ സ്ഥിതി',
	'timedmedia-transcodeinfo' => 'ട്രാൻസ്‌കോഡ് വ്യുൽപ്പന്നത്തിന്റെ വിവരണം',
	'timedmedia-actions' => 'പ്രവൃത്തികൾ',
	'timedmedia-direct-link' => 'വ്യുൽപ്പന്നം ഡൗൺലോഡ് ചെയ്യുക',
	'timedmedia-not-ready' => 'തയ്യാറായിട്ടില്ല',
	'timedmedia-completed-on' => 'ട്രാൻസ്‌കോഡ് ചെയ്യൽ പൂർത്തിയായി $1',
	'timedmedia-error-on' => 'ട്രാൻസ്‌കോഡ് ചെയ്യലിൽ $1 എന്ന സമയത്ത് പിഴവുണ്ടായി',
	'timedmedia-started-transcode' => 'ട്രാൻസ്‌കോഡ് ചെയ്യൽ $1 മുമ്പ് ആരംഭിച്ചു. $2',
	'timedmedia-percent-done' => 'ഏകദേശം $1% പൂർത്തിയായി',
	'timedmedia-in-job-queue' => 'ജോബ് ക്യൂവിലേയ്ക്ക് $1 മുമ്പ് ചേർത്തു',
	'timedmedia-unknown-target-size' => 'ലക്ഷ്യമിടുന്ന വലിപ്പം അറിയില്ല, $1 എൻകോഡ് ചെയ്തു',
	'timedmedia-days' => '{{PLURAL:$1|ഒരു ദിവസം|$1 ദിവസം}}',
	'timedmedia-hours' => '{{PLURAL:$1|ഒരു മണിക്കൂർ|$1 മണിക്കൂർ}}',
	'timedmedia-minutes' => '{{PLURAL:$1|ഒരു മിനിറ്റ്|$1 മിനിറ്റ്}}',
	'timedmedia-seconds' => '{{PLURAL:$1|ഒരു സെക്കന്റ്|$1 സെക്കന്റ്}}',
	'timedmedia-reset' => 'ട്രാൻസ്‌കോഡ് ചെയ്യൽ പുനഃസജ്ജീകരിക്കുക',
	'timedmedia-reset-confirm' => 'ഈ ട്രാൻസ്‌കോഡ് ചെയ്യൽ പുനഃസജ്ജീകരിക്കുമ്പോൾ നിലവിലുള്ള ഫയൽ (അങ്ങനെയൊന്നുണ്ടെങ്കിൽ) നീക്കം ചെയ്യപ്പെടും, ഒപ്പം അത് ജോബ് ക്യൂവിലേയ്ക്ക് ട്രാൻസ്‌കോഡ് ചെയ്യാൻ വീണ്ടും ചേർക്കപ്പെടുകയും ചെയ്യും.  വീണ്ടും-ട്രാൻസ്‌കോഡ് ചെയ്യാൻ അല്പസമയമെടുക്കുന്നതാണ്. <br /><br />
തുടരണമെന്ന് താങ്കൾക്കുറപ്പാണോ?',
	'timedmedia-reset-error' => 'ട്രാൻസ്‌കോഡ് ചെയ്യൽ പുനഃസജ്ജീകരിക്കുന്നതിൽ പിഴവുണ്ടായി.',
	'timedmedia-ogg' => 'ഓഗ്',
	'timedmedia-webm' => 'വെബ്എം',
	'timedmedia-mp4' => 'എംപി4',
	'timedmedia-source-file' => '$1 സ്രോതസ്സ്',
	'timedmedia-source-file-desc' => 'യഥാർത്ഥ പ്രമാണം $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'യഥാർത്ഥ പ്രമാണം $1 ($2)',
	'timedmedia-derivative-160p.ogv' => 'ഓഗ് 160പി',
	'timedmedia-derivative-desc-160p.ogv' => 'കുറഞ്ഞ ബാൻഡ്‌വിഡ്ത് ഓഗ് ചലച്ചിത്രം (160ബി)',
	'timedmedia-derivative-360p.ogv' => 'ഓഗ് 360പി',
	'timedmedia-derivative-desc-360p.ogv' => 'വെബിലൂടെ എടുക്കാവുന്ന ഓഗ് ചലച്ചിത്രം (360ബി)',
	'timedmedia-derivative-480p.ogv' => 'ഓഗ് 480പി',
	'timedmedia-derivative-desc-480p.ogv' => 'വെബിലൂടെ എടുക്കാവുന്ന ഓഗ് ചലച്ചിത്രം (480ബി)',
	'timedmedia-derivative-720p.ogv' => 'ഓഗ് 720പി',
	'timedmedia-derivative-desc-720p.ogv' => 'ഉന്നത ഗുണമേന്മയിൽ ഡൗൺലോഡ് ചെയ്യാവുന്ന ഓഗ് ചലച്ചിത്രം (720ബി)',
	'timedmedia-derivative-160p.webm' => 'വെബ്എം 160പി',
	'timedmedia-derivative-desc-160p.webm' => 'വെബിലൂടെ എടുക്കാവുന്ന വെബ്എം (160ബി)',
	'timedmedia-derivative-360p.webm' => 'വെബ്എം 360പി',
	'timedmedia-derivative-desc-360p.webm' => 'വെബിലൂടെ എടുക്കാവുന്ന വെബ്എം (360ബി)',
	'timedmedia-derivative-480p.webm' => 'വെബ്എം 480പി',
	'timedmedia-derivative-desc-480p.webm' => 'വെബിലൂടെ എടുക്കാവുന്ന വെബ്എം (360ബി)',
	'timedmedia-derivative-720p.webm' => 'വെബ്എം 720പി',
	'timedmedia-derivative-desc-720p.webm' => 'ഉന്നത ഗുണമേന്മയിൽ ഡൗൺലോഡ് ചെയ്യാവുന്ന വെബ്എം (720ബി)',
	'timedmedia-derivative-desc-320p.mp4' => 'ഉപകരണ-സുഹൃദ് എംപി4 (320ബി)',
	'timedmedia-derivative-desc-480p.mp4' => 'വെബിലൂടെ എടുക്കാവുന്ന എംപി4 (480ബി)',
	'timedmedia-derivative-desc-720p.mp4' => 'എച്ച്.ഡി. ഗുണമേന്മയുള്ള എംപി4 (720ബി)',
	'timedmedia-derivative-ogg' => 'ഓഗ് വോർബിസ്',
	'timedmedia-derivative-desc-ogg' => 'ഓഗ് വോർബിസ്',
	'timedmedia-derivative-opus' => 'ഓപസ്',
	'timedmedia-derivative-desc-opus' => 'ഓപസ്',
	'timedmedia-derivative-mp3' => 'എം.പി.3',
	'timedmedia-derivative-desc-mp3' => 'എം.പി.3',
	'timedmedia-derivative-m4a' => 'എ.എ.സി.',
	'timedmedia-derivative-desc-m4a' => 'എ.എ.സി.',
	'timedmedia-subtitle-new' => 'പുതിയ പരിഭാഷ തുടങ്ങുക അല്ലെങ്കിൽ നിലവിലുള്ളത് തിരുത്തുക',
	'timedmedia-subtitle-new-desc' => "ഭാഷ തിരഞ്ഞെടുത്ത്, '''{{int:Timedmedia-subtitle-new-go}}''' ബട്ടൺ അമർത്തുക",
	'timedmedia-subtitle-new-go' => 'പോകൂ',
	'timedmedia-subtitle-language' => '$1 ($2) സംഭാഷണരേഖകൾ',
	'timedmedia-subtitle-no-video' => 'ഇപ്പോഴത്തെ സംഭാഷണരേഖാ താളുമായി ചലച്ചിത്രങ്ങളൊന്നും ചേർത്തിട്ടില്ല',
	'timedmedia-subtitle-no-subtitles' => 'ഈ ചലച്ചിത്രത്തിന് $1 ഭാഷയിൽ ഇപ്പോൾ സംഭാഷണരേഖയൊന്നും ഇല്ല, താങ്കൾക്ക് [{{fullurl:{{FULLPAGENAME}}|action=edit}} ഈ താൾ തിരുത്തി] അവ കൂട്ടിച്ചേർക്കാവുന്നതാണ്',
	'timedmedia-subtitle-remote' => 'ഈ പ്രമാണത്തിനുള്ള സമയമനുസരിച്ചുള്ള എഴുത്ത് $1-ൽ ഹോസ്റ്റ് ചെയ്തിട്ടുണ്ട്.',
	'timedmedia-subtitle-remote-link' => 'ഈ പ്രമാണത്തിനുള്ള [$1 വിവരണ താൾ] $2-ൽ താങ്കൾക്ക് കാണാവുന്നതാണ്',
	'timedmediahandler' => 'മീഡിയ സമയമനുസരിച്ച് കൈകാര്യം ചെയ്യാനുള്ളയുപകരണം',
	'timedmedia-videos' => '{{PLURAL:$1|ഒരു ചലച്ചിത്രം|$1 ചലച്ചിത്രങ്ങൾ}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|ഒരു ഓഗ് ചലച്ചിത്രം|$1 ഓഗ് ചലച്ചിത്രങ്ങൾ}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|ഒരു വെബ്എം ചലച്ചിത്രം|$1 വെബ്എം ചലച്ചിത്രങ്ങൾ}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|ഒരു ട്രാൻസ്കോഡ്|$1 ട്രാൻസ്കോഡുകൾ}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|ഒരെണ്ണം ട്രാൻസ്കോഡ് ചെയ്യുന്നു|$1 എണ്ണം ട്രാൻസ്കോഡ് ചെയ്യുന്നു}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|ഒരെണ്ണം ട്രാൻസ്കോഡ് ചെയ്യാനായി ഉണ്ട്|$1 എണ്ണം ട്രാൻസ്കോഡ് ചെയ്യാനായി ഉണ്ട്}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|ഒരെണ്ണം ട്രാൻസ്കോഡ് ചെയ്യുന്നത് പരാജയപ്പെട്ടു|$1 എണ്ണം ട്രാൻസ്കോഡ് ചെയ്യുന്നത് പരാജയപ്പെട്ടു}}',
	'timedmedia-file' => 'പ്രമാണം',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'timedmedia-desc' => 'ऑग थियोरा व वॉर्बिस संचिकांसाठीचा चालक, जावास्क्रीप्ट प्लेयर सकट', # Fuzzy
	'timedmedia-ogg-short-audio' => 'ऑग $1 ध्वनी संचिका, $2',
	'timedmedia-ogg-short-video' => 'ऑग $1 चलतचित्र संचिका, $2',
	'timedmedia-ogg-short-general' => 'ऑग $1 मीडिया संचिका, $2',
	'timedmedia-ogg-long-audio' => 'ऑग $1 ध्वनी संचिका, लांबी $2, $3',
	'timedmedia-ogg-long-video' => 'ऑग $1 चलतचित्र संचिका, लांबी $2, $4×$5 पीक्सेल्स, $3',
	'timedmedia-ogg-long-multiplexed' => 'ऑग ध्वनी/चित्र संचिका, $1, लांबी $2, $4×$5 पिक्सेल्स, $3 एकूण',
	'timedmedia-ogg-long-general' => 'ऑग मीडिया संचिका, लांबी $2, $3',
	'timedmedia-ogg-long-error' => 'चुकीची ऑग संचिका: $1',
	'timedmedia-more' => 'आणखी...',
	'timedmedia-dismiss' => 'बंद करा',
	'timedmedia-download' => 'संचिका उतरवा',
	'timedmedia-desc-link' => 'या संचिकेबद्दलची माहिती',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aviator
 */
$messages['ms'] = array(
	'timedmedia-desc' => 'Pemproses audio, video dan teks bermasa, dengan sokongan format untuk WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'fail bunyi Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'fail video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'fail media Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'fail bunyi Ogg $1, tempoh $2, $3',
	'timedmedia-ogg-long-video' => 'fail video Ogg $1, tempoh $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'fail audio/video multipleks Ogg, $1, tempoh $2, $4×$5 piksel, keseluruhan $3',
	'timedmedia-ogg-long-general' => 'fail media Ogg, tempoh $2, $3',
	'timedmedia-ogg-long-error' => 'Fail Ogg tidak sah: $1',
	'timedmedia-webm-short-video' => 'fail video WebM $1, $2',
	'timedmedia-webm-long-video' => 'fail audio/video webM, $1, tempoh $2, $4×$5 piksel, $3 keseluruhannya',
	'timedmedia-flac-short-audio' => 'Fail audio FLAC, $1',
	'timedmedia-flac-long-audio' => 'Fail audio FLAC, tempoh $1, $2 keseluruhannya',
	'timedmedia-wav-short-audio' => 'Fail audio WAV, $1',
	'timedmedia-wav-long-audio' => 'Fail audio WAV, tempoh $1, $2 keseluruhannya',
	'timedmedia-wav-pcm-required' => 'Anda boleh memuat naik WAV PCM (Pulse Code Modulation) sahaja.',
	'timedmedia-mp4-short-video' => 'fail video MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'fail audio/video MP4, $1, tempoh $2, $4×$5 piksel, $3 keseluruhannya',
	'timedmedia-no-player-js' => 'Maaf, pelayar anda sama ada telah dimatikan JavaScript-nya ataupun tidak mempunyai sebarang pemain yang disokong.<br />
Anda boleh <a href="$1">memuat turun sedutan</a> itu atau <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">memuat turun pemain</a> yang boleh memutarkan sedutan berkenaan dalam pelayar anda.',
	'timedmedia-more' => 'Lagi…',
	'timedmedia-dismiss' => 'Tutup',
	'timedmedia-download' => 'Muat turun fail',
	'timedmedia-play-media' => 'Mainkan media',
	'timedmedia-desc-link' => 'Perihal fail ini',
	'timedmedia-oggThumb-version' => 'OggHandler memerlukan oggThumb versi $1 ke atas.',
	'timedmedia-oggThumb-failed' => 'oggThumb gagal mencipta gambar kenit.',
	'timedmedia-status-header' => 'Status transkod',
	'timedmedia-update-status' => 'Kemaskinikan status transkod',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Status tidak diketahui',
	'timedmedia-transcodeinfo' => 'Keterangan hasil terbitan transkod',
	'timedmedia-actions' => 'Tindakan',
	'timedmedia-direct-link' => 'Muat turun terbitan',
	'timedmedia-not-ready' => 'Belum sedia',
	'timedmedia-completed-on' => 'Pentranskodan selesai pada $1',
	'timedmedia-error-on' => 'Ralat dalam transkod pada $1',
	'timedmedia-started-transcode' => 'Pentranskodan bermula $1 lalu. $2',
	'timedmedia-percent-done' => 'Kira-kira $1% selesai',
	'timedmedia-in-job-queue' => 'Ditambahkan ke dalam baris gilir kerja $1 lalu',
	'timedmedia-unknown-target-size' => 'Saiz sasaran tidak diketahui, $1 dikodkan',
	'timedmedia-days' => '$1 hari',
	'timedmedia-hours' => '$1 jam',
	'timedmedia-minutes' => '$1 minit',
	'timedmedia-seconds' => '$1 saat',
	'timedmedia-reset' => 'Set semula transkod',
	'timedmedia-reset-confirm' => 'Mengeset semula transkod ini akan membuang sebarang fail yang sedia ada (jika ada), lalu menambahkan semula transkod ke dalam baris gilir tugas. Pentranskodan semula akan memakan masa.<br /><br />Adakah anda tetap ingin melakukannya?',
	'timedmedia-reset-error' => 'Ralat ketika mengeset semula tugas pentranskodan.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Sumber $1',
	'timedmedia-source-file-desc' => 'Fail $1 asli, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Fail $1 asli ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg lebar jalur rendah (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg boleh strim web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg boleh strim web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Video Ogg boleh muat turun bermutu tinggi (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM boleh strim web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM boleh strim web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM boleh strim web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Video WebM boleh muat turun bermutu tinggi (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 mesra peranti (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 boleh strim web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 bermutu HD (720P)',
	'timedmedia-subtitle-new' => 'Buat terjemahan baru atau sunting terjemahan sedia ada',
	'timedmedia-subtitle-new-desc' => "Pilih bahasa dan tekan butang '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Pergi',
	'timedmedia-subtitle-language' => 'Sari kata $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Tiada video yang berkaitan dengan halaman sari kata ini',
	'timedmedia-subtitle-no-subtitles' => 'Sekarang, tiada sari kata dalam $1 bagi video ini; anda boleh [{{fullurl:{{FULLPAGENAME}}|action=edit}} menyunting halaman ini] untuk menambahkannya',
	'timedmedia-subtitle-remote' => 'Teks termasa untuk fail ini dihoskan di $1',
	'timedmedia-subtitle-remote-link' => 'Anda boleh [$1 membaca halaman keterangan] untuk fail ini di $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '$1 video',
	'timedmedia-ogg-videos' => '$1 video Ogg',
	'timedmedia-webm-videos' => '$1 video WebM',
	'timedmedia-derivative-state-transcodes' => '$1 transkod',
	'timedmedia-derivative-state-active' => '$1 transkod aktif',
	'timedmedia-derivative-state-queued' => '$1 transkod berbaris',
	'timedmedia-derivative-state-failed' => '$1 transkod gagal',
	'timedmedia-file' => 'Fail',
	'right-transcode-reset' => 'Mengeset semula video-video yang gagal atau ditranskodkan supaya dimasukkan semula ke dalam barisan gilir.',
	'right-transcode-status' => 'Melihat [[Special:TimedMediaHandler|maklumat tentang kegiatan transkod semasa]]',
	'action-transcode-status' => 'melihat status pentranskodan semasa',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'timedmedia-more' => 'Седе ламо...',
	'timedmedia-dismiss' => 'Пекстамс',
	'timedmedia-download' => 'Таргамо файла',
	'timedmedia-play-media' => 'Седямо медия',
	'timedmedia-desc-link' => 'Те файладонть',
	'timedmedia-source-file' => '$1 лисьмапря',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'timedmedia-more' => 'Huehca ōmpa...',
	'timedmedia-download' => 'Tictemōz tlahcuilōlli',
	'timedmedia-desc-link' => 'Inīn tlahcuilōltechcopa',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 * @author Laaknor
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'timedmedia-desc' => 'Håndteringsprogram for lyd, video og tidsbestemt tekst, med formatstøtte for WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 lydfil, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videofil, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 mediefil, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 lydfil, lengde $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videofil, lengde $2, $4×$5 piksler, $3',
	'timedmedia-ogg-long-multiplexed' => 'Sammensatt ogg lyd-/videofil, $1, lengde $2, $4×$5 piksler, $3 til sammen',
	'timedmedia-ogg-long-general' => 'Ogg mediefil, lengde $2, $3',
	'timedmedia-ogg-long-error' => 'Ugyldig Ogg-fil: $1',
	'timedmedia-webm-short-video' => 'WebM $1 videofil, $2',
	'timedmedia-webm-long-video' => 'WebM lyd-/videofil, $1, lengde $2, $4 × $5 piksler, $3 til sammen',
	'timedmedia-flac-short-audio' => 'FLAC-lydfil, $1',
	'timedmedia-flac-long-audio' => 'FLAC-lydfil, varighet $1, $2 totalt',
	'timedmedia-wav-short-audio' => 'WAV-lydfil, $1',
	'timedmedia-wav-long-audio' => 'WAV-lydfil, varighet $1, $2 totalt',
	'timedmedia-wav-pcm-required' => 'Du kan kun laste opp PCM (Pulse Code Modulation) WAV.',
	'timedmedia-mp4-short-video' => 'MP4 $1 videofil, $2',
	'timedmedia-mp4-long-video' => 'MP4-fil for lyd/video, $1, lengde $2, $4 × $5 piksler, $3 totalt',
	'timedmedia-no-player-js' => 'Beklager, nettleseren din har enten deaktivert JavaScript eller har ingen støttet spiller.<br />
Du kan <a href="$1">laste ned klippet</a> eller <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">laste ned en spiller</a> for å spille av klippet i nettleseren din.',
	'timedmedia-more' => 'Mer …',
	'timedmedia-dismiss' => 'Lukk',
	'timedmedia-download' => 'Last ned fil',
	'timedmedia-play-media' => 'Spill av media',
	'timedmedia-desc-link' => 'Om denne filen',
	'timedmedia-oggThumb-version' => 'OggHandler krever oggThumb versjon $1 eller senere.',
	'timedmedia-oggThumb-failed' => 'oggThumb klarte ikke å opprette miniatyrbildet.',
	'timedmedia-status-header' => 'Omkodingsstatus',
	'timedmedia-update-status' => 'Oppdater omkodingsstatus',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Ukjent status',
	'timedmedia-transcodeinfo' => 'Beskrivelse',
	'timedmedia-actions' => 'Handlinger',
	'timedmedia-direct-link' => 'Last ned utgave',
	'timedmedia-not-ready' => 'Ikke klar',
	'timedmedia-completed-on' => 'Omkoding ferdig $1',
	'timedmedia-error-on' => 'Omkoding feilet den $1',
	'timedmedia-started-transcode' => 'Omkoding startet for $1 siden. $2',
	'timedmedia-percent-done' => 'Rundt $1% ferdig',
	'timedmedia-in-job-queue' => 'Lagt til i jobbkø for $1 siden',
	'timedmedia-unknown-target-size' => 'Ukjent målstørrelse, $1 ferdig kodet',
	'timedmedia-days' => '{{PLURAL:$1|1 dag|$1 dager}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 time|$1 timer}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minutt|$1 minutter}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 sekund|$1 sekunder}}',
	'timedmedia-reset' => 'Nullstill omkoding',
	'timedmedia-reset-confirm' => 'Nullstilling av denne omkodingsjobben vil slette eksisterende filer (hvis det er noen), og gjeninnsette omkodingsjobben i jobbkøen. Dette vil naturligvis ta noe tid.<br /><br />
Er du sikker på at du ønsker å fortsette?',
	'timedmedia-reset-error' => 'Det oppsto en feil ved forsøk på å nullstille omkodingsjobben.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 kilde',
	'timedmedia-source-file-desc' => 'Original $1-fil, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Original $1-fil ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Lav båndbredde Ogg-video (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Nett-strømbar Ogg-video (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Nett-strømbar Ogg-video (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Høykvalitets nedlastbar Ogg-video (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Nett-strømbar WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Nett-strømbar WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Nett-strømbar WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Høykvalitets nedlastbar WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'Mobilvennlig MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Nett-strømbar MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD-kvalitet MP4 (720P)',
	'timedmedia-subtitle-new' => 'Opprett ny oversettelse eller rediger eksisterende',
	'timedmedia-subtitle-new-desc' => "Velg språk eller trykk på '''{{int:Timedmedia-subtitle-new-go}}'''-knappen",
	'timedmedia-subtitle-new-go' => 'Kjør',
	'timedmedia-subtitle-language' => '$1 ($2) undertekster',
	'timedmedia-subtitle-no-video' => 'Det finnes ingen video koblet til den aktuelle undertekstsiden',
	'timedmedia-subtitle-no-subtitles' => 'Det er for øyeblikket ingen undertekster på $1 for denne videoen. Du kan [{{fullurl:{{FULLPAGENAME}}|action=edit}} redigere denne siden] for å legge de til',
	'timedmedia-subtitle-remote' => 'Undertekster (timed text) for denne filen befinner seg på $1',
	'timedmedia-subtitle-remote-link' => 'Du kan [$1 vise beskrivelsessiden] for denne filen på $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video|$1 videoer}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg-video|$1 Ogg-videoer}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM-video|$1 WebM-videoer}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 omkoding|$1 omkodinger}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 pågående omkoding|$1 pågående omkodinger}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 omkoding|$1 omkodinger}} i kø',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 omkoding|$1 omkodinger}} feilet',
	'timedmedia-file' => 'Fil',
	'right-transcode-reset' => 'Nullstill feilede eller omkodede videoer så de blir gjeninnsatt i jobbkøen.',
	'right-transcode-status' => 'Vis [[Special:TimedMediaHandler|informasjon om pågående omkodinger]]',
	'action-transcode-status' => 'vise pågående omkodingsstatus',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'timedmedia-desc' => 'Stüürprogramm för Ogg-Theora- un Vorbis Datein, mitsamt en Afspeler in JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg-$1-Toondatei, $2',
	'timedmedia-ogg-short-video' => 'Ogg-$1-Videodatei, $2',
	'timedmedia-ogg-short-general' => 'Ogg-$1-Mediendatei, $2',
	'timedmedia-ogg-long-audio' => 'Ogg-$1-Toondatei, $2 lang, $3',
	'timedmedia-ogg-long-video' => 'Ogg-$1-Videodatei, $2 lang, $4×$5 Pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-Multiplexed-Audio-/Video-Datei, $1, $2 lang, $4×$5 Pixels, $3 alltohoop',
	'timedmedia-ogg-long-general' => 'Ogg-Mediendatei, $2 lang, $3',
	'timedmedia-ogg-long-error' => 'Kaputte Ogg-Datei: $1',
	'timedmedia-more' => 'Mehr...',
	'timedmedia-dismiss' => 'Dichtmaken',
	'timedmedia-download' => 'Datei dalladen',
	'timedmedia-desc-link' => 'Över disse Datei',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'timedmedia-desc' => 'Haandelt audio, video en ondertitels aof mit ondersteuning veur WebM, Ogg Theora, Vorbis en srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 geluudsbestaand, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videobestaand, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 mediabestaand, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 geluudsbestaand, lengte $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videobestaand, lengte $2, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-emultiplext geluuds-/videobestaand, $1, lengte $2, $4×$5 pixels, $3 totaal',
	'timedmedia-ogg-long-general' => 'Ogg-mediabestaand, lengte $2, $3',
	'timedmedia-ogg-long-error' => 'Ongeldig Ogg-bestaand: $1',
	'timedmedia-more' => 'Meer...',
	'timedmedia-dismiss' => 'Sluten',
	'timedmedia-download' => 'Bestaand binnenhaolen',
	'timedmedia-desc-link' => 'Over dit bestaand',
);

/** Nepali (नेपाली)
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'timedmedia-source-file-desc' => 'मूल $1 फाईल, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'मूल $1 फाईल ($2)',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'timedmedia-desc' => 'Handelt audio, video en ondertitels af met ondersteuning voor WebM, Ogg Theora, Vorbis en srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 geluidsbestand, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videobestand, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 mediabestand, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 geluidsbestand, lengte $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videobestand, lengte $2, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg gemultiplexed geluids/videobestand, $1, lengte $2, $4×$5 pixels, $3 totaal',
	'timedmedia-ogg-long-general' => 'Ogg mediabestand, lengte $2, $3',
	'timedmedia-ogg-long-error' => 'Ongeldig Ogg-bestand: $1',
	'timedmedia-webm-short-video' => 'WebM $1 videobestand, $2',
	'timedmedia-webm-long-video' => 'WebM audio/videobestand, $1, lengte $2, $4x$5 pixels, $3 totaal',
	'timedmedia-flac-short-audio' => 'FLAC-audiobestand, $1',
	'timedmedia-flac-long-audio' => 'FLAC-audiobestand, lengte $1, $2 gemiddeld',
	'timedmedia-wav-short-audio' => 'WAV-audiobestand, $1',
	'timedmedia-wav-long-audio' => 'WAV-audiobestand, lengte $1, $2 gemiddeld',
	'timedmedia-wav-pcm-required' => 'U kunt alleen PCM (Pulse Code Modulation) WAV uploaden.',
	'timedmedia-mp4-short-video' => 'MP4 $1 videobestand, $2',
	'timedmedia-mp4-long-video' => 'MP4 audio/videobestand, $1, lengte $2, $4x$5 pixels, $3 totaal',
	'timedmedia-no-player-js' => 'Uw systeem heeft JavaScript uitgeschakeld of er is geen ondersteunde mediaspeler.<br />
U kunt <a href="$1">de clip downloaden</a> of <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">een mediaspeler downloaden</a> om de clip af te spelen in uw browser.',
	'timedmedia-more' => 'Meer…',
	'timedmedia-dismiss' => 'Sluiten',
	'timedmedia-download' => 'Bestand downloaden',
	'timedmedia-play-media' => 'Media afspelen',
	'timedmedia-desc-link' => 'Over dit bestand',
	'timedmedia-oggThumb-version' => 'OggHandler vereist oggThumb versie $1 of hoger.',
	'timedmedia-oggThumb-failed' => 'oggThumb kon geen miniatuur aanmaken.',
	'timedmedia-status-header' => 'Conversiestatus',
	'timedmedia-update-status' => 'Conversiestatus bijwerken',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Onbekende status',
	'timedmedia-transcodeinfo' => 'Beschrijving van afgeleide conversie',
	'timedmedia-actions' => 'Handelingen',
	'timedmedia-direct-link' => 'Afgeleid werk downloaden',
	'timedmedia-not-ready' => 'Niet klaar',
	'timedmedia-completed-on' => 'Conversie voltooid op $1',
	'timedmedia-error-on' => 'Fout in de conversie om $1',
	'timedmedia-started-transcode' => 'De conversie is $1 geleden begonnen. $2',
	'timedmedia-percent-done' => 'Ongeveer $1% afgerond',
	'timedmedia-in-job-queue' => '$1 geleden toegevoegd aan de Job queue',
	'timedmedia-unknown-target-size' => 'Onbekende doelgrootte, $1 gecodeerd',
	'timedmedia-days' => '{{PLURAL:$1|1 dag|$1 dagen}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 uur|$1 uur}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuut|$1 minuten}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 seconde|$1 seconden}}',
	'timedmedia-reset' => 'Transcodering opnieuw instellen',
	'timedmedia-reset-confirm' => 'Door de transcodering opnieuw in te stellen worden alle bestanden bestanden (als aanwezig) verwijderd en de transcodering wordt opnieuw toegevoegd aan de wachtrij. Transcoderen kost tijd.<br /><br />
Weet u zeker dat u wilt doorgaan?',
	'timedmedia-reset-error' => 'Er is een fout opgetreden tijdens het opnieuw instellen van de transcoderingstaak.',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Bron van $1',
	'timedmedia-source-file-desc' => 'Origineel $1-bestand, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Origineel $1-bestand ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160P',
	'timedmedia-derivative-desc-160p.ogv' => 'Lage bandbreedte Ogg video (160P)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360P',
	'timedmedia-derivative-desc-360p.ogv' => 'Te webstreamen Ogg video (360P)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480P',
	'timedmedia-derivative-desc-480p.ogv' => 'Te webstreamen Ogg video (480P)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720P',
	'timedmedia-derivative-desc-720p.ogv' => 'Hoge kwaliteit downloadbare Ogg video (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Web streamable WebM (160P)',
	'timedmedia-derivative-360p.webm' => 'WebM 360P',
	'timedmedia-derivative-desc-360p.webm' => 'Te webstreamen WebM (360P)',
	'timedmedia-derivative-480p.webm' => 'WebM 480P',
	'timedmedia-derivative-desc-480p.webm' => 'Te webstreamen WebM (480P)',
	'timedmedia-derivative-720p.webm' => 'WebM 720P',
	'timedmedia-derivative-desc-720p.webm' => 'Hoge kwaliteit downloadbare WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'Apparaatvriendelijke MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Te webstreamen MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD-kwaliteit MP4 (720P)',
	'timedmedia-subtitle-new' => 'Nieuw vertaling maken of bestaande bewerken',
	'timedmedia-subtitle-new-desc' => "Selecteer een taal en klik op de knop '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'OK',
	'timedmedia-subtitle-language' => 'Ondertitels in $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Er is geen video gekoppeld aan de huidige ondertitelpagina',
	'timedmedia-subtitle-no-subtitles' => 'Er zijn op het moment geen ondertitels in het $1 voor deze video. U kunt [{{fullurl:{{FULLPAGENAME}}|action=edit}} deze pagina bewerken] om ze toe te voegen',
	'timedmedia-subtitle-remote' => 'De ondertitels voor dit bestand komen van $1',
	'timedmedia-subtitle-remote-link' => 'U kunt de [$1 beschrijvingspagina voor dit bestand] bekijken op $2',
	'timedmediahandler' => 'Timed Media Handler',
	'timedmedia-videos' => "{{PLURAL:$1|één video|$1 video's}}",
	'timedmedia-ogg-videos' => "{{PLURAL:$1|één Oggvideo|$1 Oggvideo's}}",
	'timedmedia-webm-videos' => "{{PLURAL:$1|één WebM-video|$1 WebM-video's}}",
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|één transcodering|$1 transcoderingen}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|één lopende transcodering|$1 lopende transcoderingen}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|één transcodering|$1 transcoderingen}} in de wachtrij',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|één mislukte transcodering|$1 mislukte transcoderingen}}',
	'timedmedia-file' => 'Bestand',
	'right-transcode-reset' => "Video's waarvoor transcoderen mislukt is of die al getranscodeerd zijn opnieuw in de jobqueue plaatsen.",
	'right-transcode-status' => '[[Special:TimedMediaHandler|Gegevens over de huidige transcoderingsactiviteit]] bekijken',
	'action-transcode-status' => 'huidige transcoderingsstatus te bekijken',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Eirik
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'timedmedia-desc' => 'Handteringsprogram for ljod, video og tidbunden tekst, med formatstøtte for WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1-lydfil, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1-videofil, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1-mediafil, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1-lydfil, lengd $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1-videofil, lengd $2, $4×$5 pikslar, $3',
	'timedmedia-ogg-long-multiplexed' => 'Samansett ogg lyd-/videofil, $1, lengd $2, $4×$5 pikslar, $3 til saman',
	'timedmedia-ogg-long-general' => 'Ogg mediafil, lengd $2, $3',
	'timedmedia-ogg-long-error' => 'Ugyldig Ogg-fil: $1',
	'timedmedia-more' => 'Meir...',
	'timedmedia-dismiss' => 'Lat att',
	'timedmedia-download' => 'Last ned fila',
	'timedmedia-play-media' => 'Spel av media',
	'timedmedia-desc-link' => 'Om denne fila',
	'timedmedia-actions' => 'Handlingar',
	'timedmedia-not-ready' => 'Ikkje ferdig',
	'timedmedia-days' => '{{PLURAL:$1|1 dag|$1 dagar}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 time|$1 timar}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minutt|$1 minutt}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 sekund|$1 sekund}}',
	'timedmedia-source-file' => '$1-kjelde',
	'timedmedia-source-file-desc' => 'Opphavleg $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg-video med låg bandbreidd (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg-video som kan strøymast på nett (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg-video som kan strøymast på nett (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Ogg-video av høg kvalitet som kan lastast ned (720P)',
	'timedmedia-subtitle-new' => 'Lag ny omsetjing eller endra eksisterande',
	'timedmedia-subtitle-new-desc' => "Byt ut '''$1'''-delen med [[:en:ISO 639|språkkoden]] din og trykk på '''{{int:Timedmedia-subtitle-new-go}}'''-knappen", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Gå',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'timedmedia-desc' => 'Supòrt pels fichièrs Ogg Theora e Vorbis, amb un lector Javascript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Fichièr son Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Fichièr vidèo Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Fichièr mèdia Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Fichièr son Ogg $1, durada $2, $3',
	'timedmedia-ogg-long-video' => 'Fichièr vidèo Ogg $1, durada $2, $4×$5 pixèls, $3',
	'timedmedia-ogg-long-multiplexed' => 'Fichièr multiplexat àudio/vidèo Ogg, $1, durada $2, $4×$5 pixèls, $3',
	'timedmedia-ogg-long-general' => 'Fichièr mèdia Ogg, durada $2, $3',
	'timedmedia-ogg-long-error' => 'Fichièr Ogg invalid : $1',
	'timedmedia-webm-short-video' => 'Fichièr vidèo WebM $1, $2',
	'timedmedia-webm-long-video' => "Fichièr àudio/vidèo WebM, $1, longor $2, $4 x $5 pixèls, $3 l'ensemble",
	'timedmedia-flac-short-audio' => 'Fichièr àudio FLAC, $1',
	'timedmedia-flac-long-audio' => 'Fichièr àudio FLAC, durada $1, debit $2 sus l’ensemble',
	'timedmedia-wav-short-audio' => 'Fichièr àudio WAV, $1',
	'timedmedia-more' => 'Mai…',
	'timedmedia-dismiss' => 'Tampar',
	'timedmedia-download' => 'Telecargar lo fichièr',
	'timedmedia-desc-link' => "A prepaus d'aqueste fichièr",
	'timedmedia-file' => 'Fichièr',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 * @author Psubhashish
 */
$messages['or'] = array(
	'timedmedia-desc' => 'ଅଡିଓ, ଭିଡ଼ିଓ ଏବଂ ସାମୟିକ ଲେଖା ଗୁଡିକ ପାଇଁ ୱେବଏମ, ଓଜିଜି ଥିଓରା, ଭୋରବିସ, ଏସଆରଟି (WebM, Ogg Theora, Vorbis, srt) ସହାୟତା ଥିବା ପରିଚାଳନା କାରୀ',
	'timedmedia-ogg-short-audio' => 'Ogg $1 ଶବ୍ଦ ଫାଇଲ, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 ଭିଡ଼ିଓ ଫାଇଲ, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 ମିଡ଼ିଆ ଫାଇଲ, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ଶବ୍ଦ ଫାଇଲ, ଲମ୍ବ $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 ଭିଡ଼ିଓ, ଲମ୍ବ $2, $4×$5 ପିକ୍ସେଲ, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg ମଲଟିପ୍ଲେକ୍ସ ଧ୍ୱନି/ଚିତ୍ର ଫାଇଲ, $1, ଲମ୍ବ $2, $4×$5 ପିକ୍ସେଲ, ମୋଟ $3',
	'timedmedia-ogg-long-general' => 'Ogg ମିଡ଼ିଆ ଫାଇଲ, ଲମ୍ବ $2, $3',
	'timedmedia-ogg-long-error' => 'ଅବୈଧ ogg ଫାଇଲ: $1',
	'timedmedia-webm-short-video' => 'Ogg $1 ଭିଡ଼ିଓ ଫାଇଲ, $2',
	'timedmedia-webm-long-video' => 'ogg ଅଡିଓ/ଭିଡ଼ିଓ ଫାଇଲ, $1, ଲମ୍ବ $2, $4×$5 ପିକ୍ସେଲ, ମୋଟ $3',
	'timedmedia-mp4-short-video' => 'MP4 $1 ଭିଡ଼ିଓ ଫାଇଲ, $2',
	'timedmedia-mp4-long-video' => 'MP4 ଅଡିଓ/ଭିଡ଼ିଓ ଫାଇଲ, $1, ଲମ୍ବ $2, $4×$5 ପିକ୍ସେଲ, ମୋଟ $3',
	'timedmedia-no-player-js' => 'ଦୁଖୀତଃ, ଆପଣଙ୍କ ବ୍ରାଉଜରରେ ଜାଭାସ୍କ୍ରିପ୍ଟ ଅଚଳ ହୋଇଯାଇଛି କିମ୍ବା କିଛି ଖାପଖାଉଥିବା ପ୍ଲେଆର ନାହିଁ । <br />
ଆପଣ ଏହି ଭିଡ଼ିଓଟିକୁ ଆପଣଙ୍କ ବ୍ରାଉଜରରେ ଚଲାଇବା ପାଇଁ<a href="$1">ଭିଡିଓ କ୍ଲିପଟିକୁ ଡାଉନଲୋଡ କରିପାରିବେ</a> କିମ୍ବା <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">ଭିଡ଼ିଓ ପ୍ଲେୟାର ମଧ୍ୟ ଡାଉନଲୋଡ କରିପାରିବେ</a> ।',
	'timedmedia-more' => 'ଅଧିକ...',
	'timedmedia-dismiss' => 'ବନ୍ଦ କରିବେ',
	'timedmedia-download' => 'ଫାଇଲ ଡାଉନଲୋଡ଼',
	'timedmedia-play-media' => 'ମେଡିଆଟିକୁ ଚଲେଇବେ',
	'timedmedia-desc-link' => 'ଏହି ଫାଇଲ ବିଷୟରେ',
	'timedmedia-oggThumb-version' => 'oggପରିଚାଳନାକାରୀ $1 ସଂସ୍କରଣ କିମ୍ବା ତାଠୁ ନୂତନତମ oggଥମ୍ବନେଲ ଆବଶ୍ୟକ କରେ',
	'timedmedia-oggThumb-failed' => 'oggThumb ଛୋଟଛବି ତିଆରି କରିପାରିଲା ନାହିଁ ।',
	'timedmedia-status-header' => 'ଟ୍ରାନ୍ସକୋଡ ଅବସ୍ଥା',
	'timedmedia-update-status' => 'ଟ୍ରାନ୍ସକୋଡ ଅବସ୍ଥା ଅପଡେଟ କରିବେ',
	'timedmedia-status' => 'ଅବସ୍ଥା',
	'timedmedia-status-unknown' => 'ଅଜଣା ଅବସ୍ଥା',
	'timedmedia-transcodeinfo' => 'ଟ୍ରାନ୍ସକୋଡ ଭଜନର ବିବରଣୀ',
	'timedmedia-actions' => 'କାମସବୁ',
	'timedmedia-direct-link' => 'ଭାଜକଗୁଡିକୁ ଡାଉନଲୋଡ କରିବେ',
	'timedmedia-not-ready' => 'ପ୍ରସ୍ତୁତ ହୋଇନାହିଁ',
	'timedmedia-completed-on' => '$1 ଟ୍ରାନ୍ସକୋଡ ଶେଷହେଲା',
	'timedmedia-error-on' => '$1 ଟ୍ରାନ୍ସକୋଡରେ ଅସୁବିଧା ।', # Fuzzy
	'timedmedia-started-transcode' => 'ଟ୍ରାନ୍ସକୋଡ $1ରୁ ଆରମ୍ଭ ହେଲା । $2',
	'timedmedia-percent-done' => 'ହାରାହାରି $1% ସରିଛି',
	'timedmedia-in-job-queue' => '$1 ପୃର୍ବରୁ କାମରେ ଯୋଡାଗଲା',
	'timedmedia-unknown-target-size' => 'ଅଜଣା ଆକାର, $1 ଏନକୋଡ ହେଲା',
	'timedmedia-days' => '{{PLURAL:$1|$1 ଦିନ|$1 ଦିନଗୁଡିକ}}',
	'timedmedia-hours' => '($1 {{PLURAL:$1|ଘଣ୍ଟା| ଘଣ୍ଟା}})',
	'timedmedia-minutes' => '$1 {{PLURAL:$1|ମିନିଟ|ମିନିଟଗୁଡିକ}}',
	'timedmedia-seconds' => '{{PLURAL:$1|ସେକେଣ୍ଡ|ସେକଣ୍ଡ}}',
	'timedmedia-reset' => 'ଟ୍ରାନ୍ସକୋଡ ପୁନଃସ୍ଥାପନ କରିବେ',
	'timedmedia-reset-confirm' => 'ଟ୍ରାନ୍ସକୋଡ ପୁନଃସ୍ଥାପନା କରିବାଦ୍ଵାରା ଅଗରୁଥିବା ଫାଇଲ ହଟିଯିବ, ଏବଂ ଏହା ପ୍ରକ୍ରିୟାରେ ଟ୍ରାନ୍ସକୋଡକୁ ଆଉଥରେ ଯୋଡିଦେବ । ଏହା ପୁନଃ ଟ୍ରାନ୍ସକୋଡ ପାଇଁ କିଛି ସମୟ ନେବ ।
ଆପଣ ପ୍ରକ୍ରିୟାକୁ ଚାଲୁରଖିବା ପାଇଁ ନିଶ୍ଚିତ ?',
	'timedmedia-reset-error' => 'ଟ୍ରାନ୍ସକୋଡ ପୁନଃସ୍ଥାପନ କରିବାରେ ଅସୁବଧା ଉପୁଜିଲା',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 ଉତ୍ସ',
	'timedmedia-source-file-desc' => 'ମୂଳ $1 ଫାଇଲ, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'ମୂଳ $1 ଫାଇଲ ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'କମ ବ୍ୟାଣ୍ଡୱିଥ ogg ଭିଡ଼ିଓ (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି Ogg ଭିଡିଓ (360p)',
	'timedmedia-derivative-desc-480p.ogv' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି Ogg ଭିଡିଓ (480p)',
	'timedmedia-derivative-desc-720p.ogv' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି Ogg ଭିଡିଓ (720p)',
	'timedmedia-derivative-desc-160p.webm' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି WebM ଭିଡିଓ (160p)',
	'timedmedia-derivative-desc-360p.webm' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି WebM ଭିଡିଓ (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି WebM ଭିଡିଓ (480p)',
	'timedmedia-derivative-desc-720p.webm' => 'ଭଲ ପ୍ରକାରଥିବା ଏବଂ ଡାଉନଲୋଡ ହୋଇପାରୁଥିବା WebM(720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'ଯନ୍ତ୍ର-ସହାୟକ ଏମପି4(320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'ୱେବରେ ସିଧାଚାଲିଲା ଭଳି MP4 ଭିଡିଓ (480p)',
	'timedmedia-derivative-desc-720p.mp4' => 'ଏଚଡ଼ି ପ୍ରକାରର MP4 (720P)',
	'timedmedia-subtitle-new' => 'ନୂଆ ଅନୁବାଦ ଆରମ୍ଭ କରିବେ କିମ୍ବା ଆଗରୁଥିବା ଅନୁବାଦକୁ ବଦଳାଇବେ',
	'timedmedia-subtitle-new-desc' => "ଭାଷା ଚୟନ କରନ୍ତୁ ଏବଂ {{int:Timedmedia-subtitle-new-go}}'''ବଟନ ଦବାନ୍ତୁ",
	'timedmedia-subtitle-new-go' => 'ଯିବେ',
	'timedmedia-subtitle-language' => '$1 ($2) ସବଟାଇଟଲ',
	'timedmedia-subtitle-no-video' => 'ବର୍ତମାନର ସବଟାଇଟଲ ପୃଷ୍ଠା ସହ କୌଣସି ଭିଡିଓ ସଂଶ୍ଳିଷ୍ଟ ନାହିଁ',
	'timedmedia-subtitle-no-subtitles' => 'ବର୍ତମାନ $1ରେ ଏହି ଭିଡିଓ ପାଇଁ କୌଣସି ସବଟାଇଟଲ ନାହିଁ, ଆପଣ [{{fullurl:{{FULLPAGENAME}}|action=edit}} ବଦଳାଇ] ଏହାକୁ ଯୋଡି ପାରିବେ',
	'timedmedia-subtitle-remote' => 'ଏହି ଫାଇଲ ପାଇଁ ସାମୟିକ ଲେଖାଗୁଡିକ $1ରେ ଅଛି',
	'timedmedia-subtitle-remote-link' => 'ଆପଣ $2ରେ ଥିବା ଏହି ଫାଇଲ ପାଇଁ [$1 ବିବରଣୀ ପୃଷ୍ଠା ଦେଖିପାରିବେ]',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 ଭିଡିଓ|$1 ଭିଡିଓ ଗୁଡିକ}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg ଭିଡିଓ|$1 Ogg ଭିଡିଓ ଗୁଡିକ}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM ଭିଡିଓ|$1 WebM ଭିଡିଓ ଗୁଡିକ}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 ଟ୍ରାନ୍ସକୋଡ|$1 ଟ୍ରାନ୍ସକୋଡଗୁଡିକ}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 ଚାଲୁଥିବା ଟ୍ରାନ୍ସକୋଡ|$1 ଚାଲୁଥିବା ଟ୍ରାନ୍ସକୋଡଗୁଡିକ}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 ଧାଡିରେ ଥିବା ଟ୍ରାନ୍ସକୋଡ|$1 ଧାଡିରେ ଥିବା ଟ୍ରାନ୍ସକୋଡଗୁଡିକ}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 ବିଫଳ ଟ୍ରାନ୍ସକୋଡ|$1 ବିଫଳ ଟ୍ରାନ୍ସକୋଡଗୁଡିକ}}',
	'timedmedia-file' => 'ଫାଇଲ',
	'right-transcode-reset' => 'ବିଫଳ ହୋଇଥିବା କିମ୍ବା ଟ୍ରାନ୍ସକୋଡ ଭିଡିଓଗୁଡିକ ପୁନଃସ୍ଥାପନ କରିବେ ଯାହାଫଳରେକି ସେଗୁଡିକ ପୁଣି ପ୍ରକ୍ରିୟାକରଣ ହେବ ।',
	'right-transcode-status' => '[[Special:TimedMediaHandler|ଏବେକାର ଟ୍ରାନ୍ସକୋଡ ଗତିବିଧି]] ଦେଖିବେ',
	'action-transcode-status' => 'ଏବେକାର ଟ୍ରାନ୍ସକୋଡ ସ୍ଥିତି ଦେଖିବେ',
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'timedmedia-more' => 'Фылдæр…',
	'timedmedia-download' => 'Файл æрбавгæн',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Gman124
 */
$messages['pa'] = array(
	'timedmedia-more' => 'ਹੋਰ...',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'timedmedia-more' => 'Mehr…',
	'timedmedia-download' => 'Feil runnerlaade',
);

/** Polish (polski)
 * @author Ankry
 * @author Derbeth
 * @author Faren
 * @author Leinad
 * @author Matma Rex
 * @author Przemub
 * @author Rzuwig
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'timedmedia-desc' => 'Obsługa plików audio, wideo i napisów filmowych w formatach WebM, Ogg Theora, Vorbis i srt',
	'timedmedia-ogg-short-audio' => 'Plik dźwiękowy Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Plik wideo Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Plik multimedialny Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'plik dźwiękowy Ogg $1, długość $2, $3',
	'timedmedia-ogg-long-video' => 'plik wideo Ogg $1, długość $2, rozdzielczość $4×$5, $3',
	'timedmedia-ogg-long-multiplexed' => 'plik audio/wideo Ogg, $1, długość $2, rozdzielczość $4×$5, ogółem $3',
	'timedmedia-ogg-long-general' => 'plik multimedialny Ogg, długość $2, $3',
	'timedmedia-ogg-long-error' => 'niepoprawny plik Ogg: $1',
	'timedmedia-webm-short-video' => 'WebM $1 plik wideo, $2',
	'timedmedia-webm-long-video' => 'WebM plik audio-wideo, $1, długość $2, $4 × $5 pikseli, ogółem $3',
	'timedmedia-no-player-js' => 'Niestety, Twoja przeglądarka ma wyłączoną obsługę JavaScript lub nie wspiera odtwarzania.<br />
Możesz <a href="$1">pobrać plik</a> lub <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">pobrać odtwarzacz</a> pozwalający oglądać wideo w przeglądarce.',
	'timedmedia-more' => 'Więcej...',
	'timedmedia-dismiss' => 'Zamknij',
	'timedmedia-download' => 'Pobierz plik',
	'timedmedia-play-media' => 'Odtwórz plik multimedialny',
	'timedmedia-desc-link' => 'Właściwości pliku',
	'timedmedia-oggThumb-version' => 'OggHandler wymaga oggThumb w wersji $1 lub późniejszej.',
	'timedmedia-oggThumb-failed' => 'oggThumb nie udało się utworzyć miniaturki.',
	'timedmedia-status-header' => 'Status konwersji',
	'timedmedia-update-status' => 'Zaktualizuj status konwersji',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Status nieznany',
	'timedmedia-transcodeinfo' => 'Opis pochodnej konwersji',
	'timedmedia-actions' => 'Operacje',
	'timedmedia-direct-link' => 'Pobierz pochodną',
	'timedmedia-not-ready' => 'Niegotowe',
	'timedmedia-completed-on' => 'Przekonwertowano o $1',
	'timedmedia-error-on' => 'Błąd w konwersji o $1',
	'timedmedia-started-transcode' => 'Konwersja rozpoczęła się $1 temu. $2',
	'timedmedia-percent-done' => 'Ukończono ok. $1%',
	'timedmedia-in-job-queue' => 'Dodano do kolejki $1 temu',
	'timedmedia-unknown-target-size' => 'Rozmiar docelowy nieznany, $1 zakodowane',
	'timedmedia-days' => '$1 {{PLURAL:$1|dzień|dni}}',
	'timedmedia-hours' => '$1 {{PLURAL:$1|godzina|godziny|godzin}}',
	'timedmedia-minutes' => '$1 {{PLURAL:$1|minuta|minuty|minut}}',
	'timedmedia-seconds' => '$1 {{PLURAL:$1|sekunda|sekundy|sekund}}',
	'timedmedia-reset' => 'Resetuj konwersję',
	'timedmedia-reset-confirm' => 'Reset konwersji spowoduje usunięcie obecnego pliku (jeżeli takowy istnieje) i doda ją ponownie do kolejki. Zabierze to trochę czasu. <br /><br />
Czy na pewno chcesz kontynuować?',
	'timedmedia-reset-error' => 'Błąd w resecie konwersji.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Źródło $1',
	'timedmedia-source-file-desc' => 'Oryginalny plik $1, $2 x $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Oryginalny plik $1 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg video o niskiej przepustowości (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg video o przepustowości sieciowej (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg video o przepustowości sieciowej (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Ogg video o wysokiej jakości (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM w jakości sieciowej (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM w jakości sieciowej (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM w jakości sieciowej (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM o wysokiej jakości (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 odpowiednie dla tego urządzenia (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 w jakości sieciowej (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 w jakości HD (720P)',
	'timedmedia-subtitle-new-go' => 'Przejdź',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transkodowanie|$1 transkodowania|$1 transkodowań}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 trwające transkodowanie|$1 trwające transkodowania|$1 trwających transkodowań}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transkodowanie|$1 transkodowania|$1 transkodowań}} w kolejce',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 nieudane transkodowanie|$1 nieudane transkodowania|$1 nieudanych transkodowań}}',
	'timedmedia-file' => 'Plik',
	'right-transcode-reset' => 'Resetowanie błędnych lub transkodowanych filmów, które zostały ponownie umieszczone w kolejce zadań',
	'right-transcode-status' => 'Podgląd [[Special:TimedMediaHandler|informacji o aktualnym statusie transkodowania]]',
	'action-transcode-status' => 'zobaczenia aktualnego statusu transkodowania',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'timedmedia-desc' => 'Gestor për ij son, filmà e test a sincronisà, con manteniment dij formà për WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Registrassion Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Film Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Archivi Multimojen Ogg $1, $2',
	'timedmedia-ogg-long-audio' => "Registrassion Ogg $1, ch'a dura $2, $3",
	'timedmedia-ogg-long-video' => "Film Ogg $1, ch'a dura $2, formà $4×$5 px, $3",
	'timedmedia-ogg-long-multiplexed' => "Archivi audio/video multiplessà Ogg, $1, ch'a dura $2, formà $4×$5 px, $3 an tut",
	'timedmedia-ogg-long-general' => "Archivi multimojen Ogg, ch'a dura $2, $3",
	'timedmedia-ogg-long-error' => 'Archivi ogg nen bon: $1',
	'timedmedia-webm-short-video' => 'Archivi filmà WebM $1, $2',
	'timedmedia-webm-long-video' => 'WebM archivi sonor/filmà, $1, longheur $2, $4 x $5 pontin, $3 an tut',
	'timedmedia-mp4-short-video' => 'Archivi filmà MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'MP4 archivi sonor/filmà, $1, longheur $2, $4 x $5 pontin, $3 an tut',
	'timedmedia-no-player-js' => 'Darmagi, sò navigador a l\'ha JavaScript disabilità o a sopòrta pa ël riprodutor.<br />
A peul <a href="$1">dëscarié la senëtta</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">dëscarié un riprodutor</a> për visualisé la senëtta su sò navigador.',
	'timedmedia-more' => 'Dë pì...',
	'timedmedia-dismiss' => 'sëré',
	'timedmedia-download' => "Dëscarié l'archivi",
	'timedmedia-play-media' => 'Lese ël mojen',
	'timedmedia-desc-link' => "Rësgoard a st'archivi",
	'timedmedia-oggThumb-version' => "OggHandler a ciama la version $1 d'oggThumb o pi agiornà.",
	'timedmedia-oggThumb-failed' => "oggThumb a l'ha falì a creé la figurin-a.",
	'timedmedia-status-header' => 'Statù ëd trascodìfica',
	'timedmedia-update-status' => 'Agiorné lë statù ëd trascodìfica',
	'timedmedia-status' => 'Stat',
	'timedmedia-status-unknown' => 'Stat pa conossù',
	'timedmedia-transcodeinfo' => 'Descrission derivà da la trascodìfica',
	'timedmedia-actions' => 'Assion',
	'timedmedia-direct-link' => 'Dëscarié ël derivà',
	'timedmedia-not-ready' => 'Pa pront',
	'timedmedia-completed-on' => 'Trascodìfica completà $1',
	'timedmedia-error-on' => 'Eror ant la trascodìfica ëd $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Trascodìfica ancaminà $1 fà. $2',
	'timedmedia-percent-done' => 'Sirca $1% fàit',
	'timedmedia-in-job-queue' => 'Giontà a la coa dij Travaj $1 fà',
	'timedmedia-unknown-target-size' => 'Dimension ëd la destinassion pa conossùa, $1 codificà',
	'timedmedia-days' => '{{PLURAL:$1|1 di|$1 di}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 ora|$1 ore}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuta|$1 minute}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 second|$1 second}}',
	'timedmedia-reset' => 'Amposté torna la trascodìfica',
	'timedmedia-reset-confirm' => "Amposté torna sa trascodìfica a tramuderà tut archivi esistent (s'a-i na j'é) e a gionterà torna la trascodìfica a la coa dij travaj. A-i andrà dël temp a trascodifiché torna. <br /><br />
É-lo sigur ëd vorèj continué?",
	'timedmedia-reset-error' => 'Eror an ampostand torna ël travaj ëd trascodìfica.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 sorziss',
	'timedmedia-source-file-desc' => 'Original $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'Larghëssa ëd banda bassa Ogg video (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Web streamable Ogg video (360P)',
	'timedmedia-derivative-desc-480p.ogv' => "Filmà Ogg lesìbil an continuà an sl'aragnà (480P)",
	'timedmedia-derivative-desc-720p.ogv' => "Filmà Ogg dëscariàbil d'àuta qualità (720P)",
	'timedmedia-derivative-desc-160p.webm' => "WebM lesìbil an continuà an sl'aragnà (160P)",
	'timedmedia-derivative-desc-360p.webm' => "WebM lesìbil an continuà an sl'aragnà (360P)",
	'timedmedia-derivative-desc-480p.webm' => "WebM lesìbil an continuà an sl'aragnà (480P)",
	'timedmedia-derivative-desc-720p.webm' => "WebM dëscariàbil d'àuta qualità (720P)",
	'timedmedia-derivative-desc-320p.mp4' => 'Dispositiv compatìbil MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => "MP4 lesìbil an continuà an sl'aragnà (480P)",
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 an qualità HD (720P)',
	'timedmedia-subtitle-new' => 'Creé na neuva tradussion o modifichene un-a esistenta',
	'timedmedia-subtitle-new-desc' => "Ch'a selession-a la lenga e ch'a sgnaca an sël boton '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Va',
	'timedmedia-subtitle-language' => '$1 ($2) sot-tìtoj',
	'timedmedia-subtitle-no-video' => 'A-i é gnun filmà associà con la pagina corenta dël sot-tìtol',
	'timedmedia-subtitle-no-subtitles' => 'A-i é al moment gnun sot-tìtoj an $1 për ës filmà, a peul [{{fullurl:{{FULLPAGENAME}}|action=edit}} modifiché costa pàgina] për gionteje',
	'timedmedia-subtitle-remote' => "Ël test previst për cost archivi a l'é ospità dzor $1",
	'timedmedia-subtitle-remote-link' => "A peul [$1 vëdde la pàgina ëd descrission] ëd s'archivi dzor $2",
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 filmà}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 filmà Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 filmà WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 trascodìfica|$1 trascodìfiche}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 trascodìfica|$1 trascodìfiche}} an esecussion',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 trascodìfica|$1 trascodìfiche}} an coa',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 trascodìfica falìa|$1 trascodìfiche falìe}}',
	'timedmedia-file' => 'Archivi',
	'right-transcode-reset' => "Amposté torna ij filmà falì o trascodificà për ch'a sio torna anserì ant la coa dij travaj.",
	'right-transcode-status' => "Smon-e [[Special:TimedMediaHandler|l'anformassion a propòsit ëd l'atività corenta ëd trascodìfica]]",
	'action-transcode-status' => 'varda lë stat ëd trascodìfica corent',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'timedmedia-ogg-short-audio' => 'Ogg $1 غږيزه دوتنه، $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 ويډيويي دوتنه، $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 رسنيزه دوتنه، $2',
	'timedmedia-more' => 'نور...',
	'timedmedia-dismiss' => 'تړل',
	'timedmedia-download' => 'دوتنه ښکته کول',
	'timedmedia-play-media' => 'رسنۍ غږول',
	'timedmedia-desc-link' => 'د همدې دوتنې په اړه',
	'timedmedia-status' => 'دريځ',
	'timedmedia-actions' => 'چارې',
	'timedmedia-days' => '{{PLURAL:$1|1 ورځ|$1 ورځې}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 ساعت|$1 ساعتونه}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 دقيقه|دقيقې}}',
	'timedmedia-subtitle-new-go' => 'ورځه',
	'timedmedia-videos' => '{{PLURAL:$1|$1 ويډيو|$1 ويډيوگانې}}',
	'timedmedia-file' => 'دوتنه',
);

/** Portuguese (português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Luckas
 * @author Malafaya
 * @author Opraco
 * @author Waldir
 * @author 555
 */
$messages['pt'] = array(
	'timedmedia-desc' => 'Tratamento de áudio, vídeo e legendagem, nos formatos WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Áudio Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Vídeo Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Multimédia Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'áudio Ogg $1, $2 de duração, $3',
	'timedmedia-ogg-long-video' => 'Vídeo Ogg $1, $2 de duração, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Áudio/vídeo Ogg multifacetado, $1, $2 de duração, $4×$5 pixels, $3 no todo',
	'timedmedia-ogg-long-general' => 'Multimédia Ogg, $2 de duração, $3',
	'timedmedia-ogg-long-error' => 'Ficheiro ogg inválido: $1',
	'timedmedia-webm-short-video' => 'Vídeo WebM $1, $2',
	'timedmedia-webm-long-video' => 'Áudio/vídeo WebM, $1, $2 de duração, $4 × $5 pixels, $3 no todo',
	'timedmedia-no-player-js' => 'Desculpe, mas ou o seu browser está com o JavaScript desativado ou não tem nenhum dos leitores suportados.<br />
Pode fazer o <a href="$1">download do vídeo</a> ou o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">download de um leitor</a> para assistir ao vídeo no seu browser.',
	'timedmedia-more' => 'Mais...',
	'timedmedia-dismiss' => 'Fechar',
	'timedmedia-download' => 'Fazer download do ficheiro',
	'timedmedia-play-media' => 'Reproduzir conteúdo',
	'timedmedia-desc-link' => 'Sobre este ficheiro',
	'timedmedia-oggThumb-version' => 'O oggHandler requer o oggThumb versão $1 ou posterior.',
	'timedmedia-oggThumb-failed' => 'O oggThumb não conseguiu criar a miniatura.',
	'timedmedia-status-header' => 'Estado da transcodificação',
	'timedmedia-update-status' => 'Atualizar o estado da transcodificação',
	'timedmedia-status' => 'estado',
	'timedmedia-status-unknown' => 'estado desconhecido',
	'timedmedia-transcodeinfo' => 'Descrição do ficheiro transcodificado',
	'timedmedia-actions' => 'Ações',
	'timedmedia-direct-link' => 'Download do ficheiro transcodificado',
	'timedmedia-not-ready' => 'Ainda não está pronto',
	'timedmedia-completed-on' => 'Transcodificação de $1 terminada',
	'timedmedia-error-on' => 'Erro na transcodificação, em $1.', # Fuzzy
	'timedmedia-started-transcode' => 'A transcodificação foi iniciada há $1. $2',
	'timedmedia-percent-done' => 'O progresso é cerca de $1%',
	'timedmedia-in-job-queue' => 'Adicionado à fila de tarefas há $1',
	'timedmedia-unknown-target-size' => 'Dimensão do destino desconhecida; $1 codificados',
	'timedmedia-days' => '{{PLURAL:$1|1 dia|$1 dias}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hora|$1 horas}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segundo|$1 segundos}}',
	'timedmedia-reset' => 'Reiniciar transcodificação',
	'timedmedia-reset-confirm' => 'Reiniciar esta transcodificação elimina qualquer ficheiro existente e volta a adicionar a transcodificação à fila de tarefas. A nova transcodificação irá demorar algum tempo. <br /><br />Tem a certeza de que pretende continuar?',
	'timedmedia-reset-error' => 'Ocorreu um erro ao reiniciar a tarefa de transcodificação',
	'timedmedia-source-file' => 'Fonte $1',
	'timedmedia-source-file-desc' => 'Ficheiro $1 original, $2 × $3 ($4)',
	'timedmedia-derivative-desc-160p.ogv' => 'Vídeo Ogg de baixa largura de banda (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Vídeo Ogg para web streaming (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Vídeo Ogg para web streaming (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Vídeo Ogg de alta qualidade para download (720 P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM para web streaming (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM para web streaming (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM de alta qualidade para download (720P)',
	'timedmedia-subtitle-language' => 'Legendas em $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Não existe nenhum vídeo associado à atual página de legendas',
	'timedmedia-subtitle-no-subtitles' => 'Neste momento não existem legendas em $1 para este vídeo. Pode [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar a página] e adicioná-las.',
	'timedmedia-file' => 'Ficheiro',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 * @author Luckas
 * @author Opraco
 */
$messages['pt-br'] = array(
	'timedmedia-desc' => 'Manipulador para arquivos Ogg Theora e Vorbis, com reprodutor JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Arquivo de áudio Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Arquivo de vídeo Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Arquivo multimídia Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'arquivo de áudio Ogg $1, $2 de duração, $3',
	'timedmedia-ogg-long-video' => 'Vídeo Ogg $1, $2 de duração, $4×$5 pixels, $3',
	'timedmedia-ogg-long-multiplexed' => 'Áudio/vídeo Ogg multifacetado, $1, $2 de duração, $4×$5 pixels, $3 no todo',
	'timedmedia-ogg-long-general' => 'Multimídia Ogg, $2 de duração, $3',
	'timedmedia-ogg-long-error' => 'Arquivo ogg inválido: $1',
	'timedmedia-no-player-js' => 'Desculpe, seu navegador ou está com JavaScript desabilitado ou não tem nenhum "player" suportado.<br />
Você pode <a href="$1">descarregar o clipe</a> ou <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">descarregar um "player"</a> para executar o clipe em seu navegador.',
	'timedmedia-more' => 'Mais...',
	'timedmedia-dismiss' => 'Fechar',
	'timedmedia-download' => 'Descarregar arquivo',
	'timedmedia-desc-link' => 'Sobre este arquivo',
	'timedmedia-oggThumb-version' => 'O oggHandler requer o oggThumb versão $1 ou posterior.',
	'timedmedia-oggThumb-failed' => 'O oggThumb não conseguiu criar a miniatura.',
	'timedmedia-actions' => 'Ações',
	'timedmedia-days' => '{{PLURAL:$1|1 dia|$1 dias}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 hora|$1 horas}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minutos}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 segundo|$1 segundos}}',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Fonte $1',
	'timedmedia-subtitle-new-go' => 'Ir',
	'timedmedia-file' => 'Arquivo',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'timedmedia-more' => 'Astawan...',
	'timedmedia-dismiss' => "Wichq'ay",
	'timedmedia-download' => 'Willañiqita chaqnamuy',
	'timedmedia-desc-link' => 'Kay willañiqimanta',
);

/** Romanian (română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Mihai
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'timedmedia-desc' => 'Gestionar pentru fișiere audio, video și subtitrări sincronizate, cu suport pentru formatele WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'fișier audio ogg $1, $2',
	'timedmedia-ogg-short-video' => 'fișier video ogg $1, $2',
	'timedmedia-ogg-short-general' => 'fișier media ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'fișier audio ogg $1, lungime $2, $3',
	'timedmedia-ogg-long-video' => 'fișier video ogg $1, lungime $2, $4×$5 pixeli, $3',
	'timedmedia-ogg-long-multiplexed' => 'fișier multiplexat audio/video ogg, $1, lungime $2, $4×$5 pixeli, $3',
	'timedmedia-ogg-long-general' => 'fișier media ogg, lungime $2, $3',
	'timedmedia-ogg-long-error' => 'fișier ogg incorect: $1',
	'timedmedia-webm-short-video' => 'fișier video WebM $1, $2',
	'timedmedia-webm-long-video' => 'fișier audio/video WebM, $1, lungime $2, $4 × $5 pixeli, $3 per ansamblu',
	'timedmedia-flac-short-audio' => 'fișier audio FLAC, $1',
	'timedmedia-flac-long-audio' => 'fișier audio FLAC, lungime $1, $2 per ansmablu',
	'timedmedia-mp4-short-video' => 'fișier video MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'fișier audio/video MP4, $1, lungime $2, $4 × $5 pixeli, $3 per ansamblu',
	'timedmedia-no-player-js' => 'Ne pare rău, însă navigatorul dumneavoastră fie are JavaScript dezactivat, fie nu conține niciun player suportat.<br />
Puteți <a href="$1">descărca clipul</a> sau puteți <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">descărca un player</a> pentru a-l reda direct în navigator.',
	'timedmedia-more' => 'Mai mult…',
	'timedmedia-dismiss' => 'Închide',
	'timedmedia-download' => 'Descarcă fișierul',
	'timedmedia-play-media' => 'Redă fișierul media',
	'timedmedia-desc-link' => 'Despre acest fișier',
	'timedmedia-oggThumb-version' => 'OggHandler necesită oggThumb, versiunea $1 sau mai recentă.',
	'timedmedia-oggThumb-failed' => 'oggThumb nu a reușit să creeze miniatura.',
	'timedmedia-status-header' => 'Starea codificării',
	'timedmedia-update-status' => 'Actualizează starea codificării',
	'timedmedia-status' => 'Stare',
	'timedmedia-status-unknown' => 'Stare necunoscută',
	'timedmedia-transcodeinfo' => 'Descrierea codificării derivate',
	'timedmedia-actions' => 'Acțiuni',
	'timedmedia-direct-link' => 'Descarcă derivata',
	'timedmedia-not-ready' => 'Nu este gata',
	'timedmedia-completed-on' => 'Codificarea $1 s-a finalizat',
	'timedmedia-error-on' => 'Eroare în codificarea din $1',
	'timedmedia-started-transcode' => 'Codificare pornită acum $1. $2',
	'timedmedia-percent-done' => 'Aproximativ $1% finalizat',
	'timedmedia-in-job-queue' => 'Adăugat la șirul de sarcini acum $1',
	'timedmedia-unknown-target-size' => 'Dimensiune finală necunoscută, $1 codificați',
	'timedmedia-days' => '{{PLURAL:$1|o zi|$1 zile|$1 de zile}}',
	'timedmedia-hours' => '{{PLURAL:$1|o oră|$1 ore|$1 de ore}}',
	'timedmedia-minutes' => '{{PLURAL:$1|un minut|$1 minute|$1 de minute}}',
	'timedmedia-seconds' => '{{PLURAL:$1|o secundă|$1 secunde|$1 de secunde}}',
	'timedmedia-reset' => 'Reinițializează codificarea',
	'timedmedia-reset-confirm' => 'Reinițializarea acestei codificări va elimina orice fișier existent (dacă există) și va readăuga codificarea la șirul de sarcini. Va dura ceva timp pentru a recodifica. <br /><br />
Sunteți sigur că doriți să continuați?',
	'timedmedia-reset-error' => 'Eroare la reinițializarea codificării.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Sursă $1',
	'timedmedia-source-file-desc' => 'Fișier $1 original, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Fișier $1 original ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Videoclip Ogg cu lățime de bandă mică (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Videoclip Ogg pentru redare pe web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Videoclip Ogg pentru redare pe web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Videoclip Ogg descărcabil, de înaltă calitate (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM pentru redare pe web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM pentru redare pe web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM pentru redare pe web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM descărcabil, de înaltă calitate (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 prietenos cu dispozitivele (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 pentru redare pe web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 de calitate HD (720P)',
	'timedmedia-subtitle-new' => 'Creare traducere nouă sau modificare una existentă',
	'timedmedia-subtitle-new-desc' => "Alegeți limba și apăsați butonul '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Du-te',
	'timedmedia-subtitle-language' => 'Subtitrare în $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Nu există niciun videoclip asociat cu pagina curentă de subtitrare',
	'timedmedia-subtitle-no-subtitles' => 'Nu există în acest moment subtitrări în limba $1 pentru acest videoclip. Puteți [{{fullurl:{{FULLPAGENAME}}|action=edit}} modifica această pagină] pentru a le adăuga.',
	'timedmedia-subtitle-remote' => 'Subtitrarea sincronizată a acestui fișier este găzduită la $1',
	'timedmedia-subtitle-remote-link' => 'Puteți [$1 vizualiza pagina descriptivă] a acestui fișier la $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 videoclip|$1 videoclipuri|$1 de videoclipuri}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 videoclip Ogg|$1 videoclipuri Ogg|$1 de videoclipuri Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 videoclip WebM|$1 videoclipuri WebM|$1 de videoclipuri WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 codificare|$1 codificări|$1 de codificări}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 codificare în curs|$1 codificări în curs|$1 de codificări în curs}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 codificare în așteptare|$1 codificări în așteptare|$1 de codificări în așteptare}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 codificare eșuată|$1 codificări eșuate|$1 de codificări eșuate}}',
	'timedmedia-file' => 'Fișier',
	'right-transcode-reset' => 'Reinițializează videoclipuri nereușit codificate pentru ca acestea să fie readăugate la șirul de sarcini.',
	'right-transcode-status' => 'Vizualizează [[Special:TimedMediaHandler|informații despre activitatea curentă de codificare]]',
	'action-transcode-status' => 'vizualizați statutul actual al codificării',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'timedmedia-desc' => 'Gestore pe le file audio, video e teste temporizzate, cu le formate supportate pe WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'File audie Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'File video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'File media Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'File audie Ogg $1, lunghezze $2, $3',
	'timedmedia-ogg-long-video' => 'File video Ogg $1, lunghezze $2, $4 x $5 pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'File multiplexed audie e video Ogg $1, lunghezze $2, $4 x $5 pixel, $3 in totale',
	'timedmedia-ogg-long-general' => 'File media Ogg, lunghezze $2, $3',
	'timedmedia-ogg-long-error' => 'Ogg file invalide: $1',
	'timedmedia-webm-short-video' => 'WebM $1 file video, $2',
	'timedmedia-webm-long-video' => 'File WebM audio/video, $1, lunghezze $2, $4 × $5 pixel, $3 in totale',
	'timedmedia-flac-short-audio' => 'File audio FLAC, $1',
	'timedmedia-flac-long-audio' => 'File audio FLAC, lunghezze $1, in totale $2',
	'timedmedia-wav-short-audio' => 'File audio WAV, $1',
	'timedmedia-wav-long-audio' => 'File audio WAV, lunghezze $1, in totale $2',
	'timedmedia-wav-pcm-required' => 'Tu puè sulamende carecà WAV de tipe PCM (Codece de Modulazione Pulsate).',
	'timedmedia-mp4-short-video' => 'MP4 $1 file video, $2',
	'timedmedia-mp4-long-video' => 'File MP4 audio/video, $1, lunghezze $2, $4 × $5 pixel, $3 in totale',
	'timedmedia-no-player-js' => "Ne dispiace, 'u browser tune tène 'u JavaScript disabbilitate o non ge tène 'n'esecutore supportate.<br />
Tu puè <a href=\"\$1\">scarecà 'u video</a> o <a href=\"//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download\">scarecà 'n'esecutore</a> pe 'ndrucà 'u video sus a 'u browser tune.",
	'timedmedia-more' => 'De cchiù...',
	'timedmedia-dismiss' => 'Chiude',
	'timedmedia-download' => 'Scareche stu file',
	'timedmedia-play-media' => "Esegue 'u media",
	'timedmedia-desc-link' => "'Mbormaziune sus a stu file",
	'timedmedia-oggThumb-version' => "OggHandler vole 'a versine de oggThumb $1 o cchiù ierte.",
	'timedmedia-oggThumb-failed' => 'oggThumn ha fallite a ccrejà le miniature.',
	'timedmedia-status-header' => "State d'a codifeche",
	'timedmedia-update-status' => "Aggiorne 'u state d'a codifeche",
	'timedmedia-status' => 'State',
	'timedmedia-status-unknown' => 'State scanusciute',
	'timedmedia-transcodeinfo' => "Descrizione derivate d'a codifeche",
	'timedmedia-actions' => 'Aziune',
	'timedmedia-direct-link' => 'Scareche le derivate',
	'timedmedia-not-ready' => "Non g'è pronde",
	'timedmedia-completed-on' => 'Codifeche combletate $1',
	'timedmedia-error-on' => "Errore jndr'à transcodifeche sus a $1",
	'timedmedia-started-transcode' => 'Transcodifeche accumenzate $1 fà. $2',
	'timedmedia-percent-done' => 'Cchiù o mene $1% fatte',
	'timedmedia-in-job-queue' => "Aggiunde a 'a Fatìe in code $1 fà",
	'timedmedia-unknown-target-size' => "Dimenzione d'a destinazione scanusciute, $1 codificate",
	'timedmedia-days' => '{{PLURAL: $1|1 sciurne|$1 sciurne}}',
	'timedmedia-hours' => '{{PLURAL: $1|1 ore|$1 ore}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minute|$1 minute}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 seconde|$1 seconde}}',
	'timedmedia-reset' => "Azzere 'a transcodifeche",
	'timedmedia-reset-confirm' => "Stoche azzere sta transcodifiche ca adda luà ogne file esistende (ce presende), e pò aggiunge 'a transcodifiche jndr'à code d'a fatìe. Cchiù vote accumenze 'a transcodifiche. <br /><br />
Sì secure ca vuè ccu vvè nnande?",
	'timedmedia-reset-error' => "Errore mendre ste azzerave 'a fatìe de transcodifiche.",
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 sorgende',
	'timedmedia-source-file-desc' => 'File origgenale $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'File origgenale $1 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg video cu banda vasce (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg video cu streaming web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg video cu streaming web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Ogg video de qualitate ierte scarecabbele (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Flusse web WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Flusse web WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Flusse web WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM de qualitate ierte scarecabbele (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'Dispositive-amiche MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Streaming web MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'Qualitate HD MP4 (720P)',
	'timedmedia-subtitle-new' => "Ccreje 'na traduziona nove o ne cange une esistende",
	'timedmedia-subtitle-new-desc' => "Scacchie 'na lènghe e cazze 'u buttone '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Véje',
	'timedmedia-subtitle-language' => '$1 ($2) sottotitele',
	'timedmedia-subtitle-no-video' => "Non ge stonne video associate cu 'u sottotitole d'a pàgene de mò",
	'timedmedia-subtitle-no-subtitles' => "Non ge stonne sottotitole pe mò jndr'à $1 pe stu video, tu puè [{{fullurl:{{FULLPAGENAME}}|action=edit}} cangià sta pàgene] o aggiungerle",
	'timedmedia-subtitle-remote' => "'U teste temborizzate pe stu file jè ospitate sus a $1",
	'timedmedia-subtitle-remote-link' => "Tu puè [$1 'ndrucà 'a pàgene de descrizione] pe stu file sus a $2",
	'timedmediahandler' => 'Gestore TimedMedia',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Video Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 Video WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodifiche}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodifiche in esecuzione}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transcodifiche in code}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodifiche fallite}}',
	'timedmedia-file' => 'File',
	'right-transcode-reset' => "Azzeramende fallite o le video transcodificate onne state sckaffate cchiù de 'na vote jndr'à code d'a fatìe.",
	'right-transcode-status' => "'Ndruche [[Special:TimedMediaHandler|le 'mbormaziune sus a l'attività de transcodifiche de mò]]",
	'action-transcode-status' => "'ndruche 'u state de mò d'a transcodifeche",
);

/** Russian (русский)
 * @author Ahonc
 * @author Eleferen
 * @author Kaganer
 * @author Kalan
 * @author Kv75
 * @author MaxSem
 * @author Okras
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'timedmedia-desc' => 'Обработчик для аудио, видео и субтитров, с поддержкой форматов: WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Звуковой файл Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Видео-файл Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Медиа-файл Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'звуковой файл Ogg $1, длительность $2, $3',
	'timedmedia-ogg-long-video' => 'видео-файл Ogg $1, длительность $2, $4 × $5 {{PLURAL:$5|пиксель|пикселя|пикселей}}, $3',
	'timedmedia-ogg-long-multiplexed' => 'мультиплексный аудио/видео-файл Ogg, $1, длительность $2, $4 × $5 {{PLURAL:$5|пиксель|пикселя|пикселей}}, $3 всего',
	'timedmedia-ogg-long-general' => 'медиа-файл Ogg, длительность $2, $3',
	'timedmedia-ogg-long-error' => 'неправильный Ogg-файл: $1',
	'timedmedia-webm-short-video' => 'WebM $1 видео-файл, $2',
	'timedmedia-webm-long-video' => 'WebM аудио/видео файл, $1, продолжительность $2, $4 × $5 {{PLURAL:$5|пиксель|пикселя|пикселей}}, всего $3',
	'timedmedia-no-player-js' => 'К сожалению, в вашем браузере отключён JavaScript, или не имеется требуемого проигрывателя.<br />
Вы можете <a href="$1">загрузить ролик</a> или <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">загрузить проигрыватель</a> для воспроизведения ролика в браузере.',
	'timedmedia-more' => 'Больше…',
	'timedmedia-dismiss' => 'Скрыть',
	'timedmedia-download' => 'Загрузить файл',
	'timedmedia-play-media' => 'Воспроизвести медиа-файл',
	'timedmedia-desc-link' => 'Информация об этом файле',
	'timedmedia-oggThumb-version' => 'OggHandler требует oggThumb версии $1 или более поздней.',
	'timedmedia-oggThumb-failed' => 'oggThumb не удалось создать миниатюру.',
	'timedmedia-status-header' => 'Состояние декодирования',
	'timedmedia-update-status' => 'Обновить статус декодирования',
	'timedmedia-status' => 'Состояние',
	'timedmedia-status-unknown' => 'Неизвестное состояние',
	'timedmedia-transcodeinfo' => 'Описание производных декодироания',
	'timedmedia-actions' => 'Действия',
	'timedmedia-direct-link' => 'Скачать модифицированный вариант',
	'timedmedia-not-ready' => 'Не готов',
	'timedmedia-completed-on' => 'Завершено декодирование $1',
	'timedmedia-error-on' => 'Ошибка при декодировании на $1',
	'timedmedia-started-transcode' => 'Декодирование запущено $1 назад. $2',
	'timedmedia-percent-done' => 'Примерно $1% выполнено',
	'timedmedia-in-job-queue' => 'Добавлено в очередь заданий $1 назад',
	'timedmedia-unknown-target-size' => 'Неизвестный целевой размер, $1 при кодировке',
	'timedmedia-days' => '{{PLURAL:$1|1 день|$1 дня|$1 дней}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 час|$1 часа|$1 часов}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 минута|$1 минуты|$1 минут}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 секунда|$1 секунды|$1 секунд}}',
	'timedmedia-reset' => 'Перезапуск декодирования',
	'timedmedia-reset-confirm' => 'Перезапуск декодирования удалит существующий файл (если он существует), и  декодирование вновь будет добавлено в очередь заданий. Повторное декодирование займет некоторое время. <br /><br />
Вы уверены, что хотите продолжить?',
	'timedmedia-reset-error' => 'Ошибка при перезапуске декодирования.',
	'timedmedia-source-file' => 'Источник $1',
	'timedmedia-source-file-desc' => 'Оригинал $1 файла, $2 × $3 ($4)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg-видео низкого качества (160p)',
	'timedmedia-derivative-desc-360p.ogv' => 'Потоковое Ogg-видео (360p)',
	'timedmedia-derivative-desc-480p.ogv' => 'Потоковое Ogg-видео (480p)',
	'timedmedia-derivative-desc-720p.ogv' => 'Ogg-видео высокого качества (720p)',
	'timedmedia-derivative-desc-360p.webm' => 'Потоковое WebM-видео (360p)',
	'timedmedia-derivative-desc-480p.webm' => 'Потоковое WebM-видео (480p)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM-видео высокого качества (720p)',
	'timedmedia-subtitle-language' => '$1 ($2) субтитры',
	'timedmedia-subtitle-no-video' => 'Нет видео, связанного с текущей страницей субтитров',
	'timedmedia-subtitle-no-subtitles' => 'В настоящее время нет субтитров на $1 для этого видео, Вы можете [{{fullurl:{{FULLPAGENAME}}|action=edit}} изменить эту страницу] для их добавления',
	'timedmedia-file' => 'Файл',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'timedmedia-more' => 'Веце...',
	'timedmedia-dismiss' => 'Заперти',
	'timedmedia-file' => 'Файл',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'timedmedia-desc' => 'Обработчик файлов Ogg Theora и Vorbis с использованием JavaScript-проигрывателя', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Звуковой файл Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Видео-файл Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Медиа-файл Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'звуковой файл Ogg $1, уһуна $2, $3',
	'timedmedia-ogg-long-video' => 'видео-файл Ogg $1, уһуна $2, $4×$5 пииксэллээх, $3',
	'timedmedia-ogg-long-multiplexed' => 'мультиплексный аудио/видео-файл Ogg, $1, уһуна $2, $4×$5 пииксэллээх, барыта $3',
	'timedmedia-ogg-long-general' => 'медиа-файл Ogg, уһуна $2, $3',
	'timedmedia-ogg-long-error' => 'сыыһа Ogg-файл: $1',
	'timedmedia-more' => 'Өссө...',
	'timedmedia-dismiss' => 'Кистээ/сап',
	'timedmedia-download' => 'Билэни хачайдаа',
	'timedmedia-desc-link' => 'Бу билэ туһунан',
);

/** Samogitian (žemaitėška)
 * @author Hugo.arg
 */
$messages['sgs'] = array(
	'timedmedia-download' => 'Atsėsiōstė faila',
);

/** Sinhala (සිංහල)
 * @author නන්දිමිතුරු
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'timedmedia-desc' => 'Ogg Theora සහ Vorbis ගොනු සඳහා හසුරුවනය, ජාවාස්ක්‍රිප්ට් ප්ලේයර් සමඟ', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 ශ්‍රව්‍ය ගොනුව, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 දෘශ්‍ය ගොනුව, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 මාධ්‍ය ගොනුව, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ශ්‍රව්‍ය ගොනුව, ප්‍රවර්තනය $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 දෘශ්‍ය ගොනුව, ප්‍රවර්තනය $2, $4×$5 පික්සල්, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg බහුපථකාරක ශ්‍රව්‍ය/දෘශ්‍ය ගොනුව, $1, ප්‍රවර්තනය $2, $4×$5 පික්සල්, $3 සමස්ත',
	'timedmedia-ogg-long-general' => 'Ogg මාධ්‍ය ගොනුව, ප්‍රවර්තනය $2, $3',
	'timedmedia-ogg-long-error' => 'අනීතික ogg ගොනුව: $1',
	'timedmedia-webm-short-video' => 'WebM $1 විදෘශ්‍ය ගොනුව, $2',
	'timedmedia-webm-long-video' => 'WebM ශ්‍රව්‍ය/දෘශ්‍ය ගොනුව, $1, දිග $2, $4 × $5 පික්සල්, $3 සමස්ථය',
	'timedmedia-mp4-short-video' => 'MP4 $1 දෘශ්‍ය ගොනුව, $2',
	'timedmedia-mp4-long-video' => 'MP4 ශ්‍රව්‍ය/දෘශ්‍ය ගොනුව, $1, දිග $2, $4 × $5 පික්සල්, $3 සමස්ථය',
	'timedmedia-more' => 'ඉතිරිය…',
	'timedmedia-dismiss' => 'වසන්න',
	'timedmedia-download' => 'ගොනුව බා ගන්න',
	'timedmedia-play-media' => 'මාධ්‍ය වයන්න',
	'timedmedia-desc-link' => 'මෙම ගොනුව පිළිබඳ',
	'timedmedia-oggThumb-version' => 'OggHandler සඳහා oggThumb $1 සංස්කරණය හෝ අලුත් එකක් අවැසිය.',
	'timedmedia-oggThumb-failed' => 'සංක්ෂිප්තය තැනුමට oggThumb අසමත්විය.',
	'timedmedia-status-header' => 'Transcode තත්වය',
	'timedmedia-update-status' => 'transcode තත්වය යාවත්කාලීන කරන්න',
	'timedmedia-status' => 'තත්වය',
	'timedmedia-status-unknown' => 'නොදන්නා තත්වය',
	'timedmedia-transcodeinfo' => 'Transcode ව්‍යුත්පන්න විස්තරය',
	'timedmedia-actions' => 'කාර්යයන්',
	'timedmedia-direct-link' => 'ව්‍යුත්පන්නය බාගන්න',
	'timedmedia-not-ready' => 'සුදානම් නැත',
	'timedmedia-completed-on' => '$1 transcode සම්පූර්ණ කරන ලදී',
	'timedmedia-error-on' => '$1 හී transcode දෝෂයක්.', # Fuzzy
	'timedmedia-started-transcode' => '$1 පෙර Transcode ආරම්භ කරන ලදී. $2',
	'timedmedia-percent-done' => '$1% පමණ ඉවරයි',
	'timedmedia-in-job-queue' => '$1 පෙර කෘත්‍ය පෙලට එක් කරන ලදී',
	'timedmedia-unknown-target-size' => 'නොදන්නා ඉලක්කගත ප්‍රමාණය, $1 කේතාංකනය කරන ලදී',
	'timedmedia-days' => '{{PLURAL:$1|දවස|$1 දවස්}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|පැය|$1 පැය}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|මිනිත්තුව|$1 මිනිත්තු}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|තත්පරය|$1 තත්පර}}', # Fuzzy
	'timedmedia-reset' => 'transcode යළි සකසන්න',
	'timedmedia-reset-error' => 'transcode කෘත්‍ය යළි සැකසීමේ දෝෂය.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 මූලාශ්‍රය',
	'timedmedia-source-file-desc' => 'නියම $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-desc-160p.ogv' => 'අවම කලාප පළල Ogg විදෘශ්‍ය (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'ජාල ශ්‍රෝතමය Ogg වීඩියෝව (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'ජාල ශ්‍රෝතමය Ogg වීඩියෝව (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'උසස් ගුණත්වයේ බාගතහැකි Ogg වීඩියෝව (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'ජාල ශ්‍රෝතමය WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'ජාල ශ්‍රෝතමය WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'ජාල ශ්‍රෝතමය WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'උසස් ගුණත්වයේ බාගතහැකි WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'උපාංග-හිතකාමී MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'ජාල ශ්‍රෝතමය MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD ගුණත්වයේ MP4 (720P)',
	'timedmedia-subtitle-new' => 'නව පරිවර්තනයක් තනන්න හෝ පවත්නා එකක් සංස්කරණය කරන්න',
	'timedmedia-subtitle-new-go' => 'යන්න',
	'timedmedia-subtitle-language' => '$1 ($2) උපශීර්ෂ',
	'timedmedia-subtitle-no-video' => 'වත්මන් උපසිරුස පිටුව සමඟ කිසිදු වීඩියෝවක් සම්බන්ධ නොවේ.',
	'timedmedia-subtitle-remote' => 'මෙම ගොනුව සඳහා කාලිත පෙළ $1 හී සත්කාර ලබා ඇත',
	'timedmedia-subtitle-remote-link' => 'ඔබට මෙම ගොනුව සඳහා [$1 විස්තර පිටුව] $2 හිදී බලාගත හැක',
	'timedmediahandler' => 'කාලිතමාධ්‍යහසුරවනය',
	'timedmedia-videos' => '{{PLURAL:$1|වීඩියෝ}} $1 ක්',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|Ogg වීඩියෝ}} $1 ක්',
	'timedmedia-webm-videos' => '{{PLURAL:$1|WebM වීඩියෝ}} $1 ක්',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcode|$1 transcodes}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|ධාවනය වන transcode}} $1',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|පෙළගස්වා ඇති transcode}} $1',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|අසමත් වූ transcode}} $1',
	'timedmedia-file' => 'ගොනුව',
	'action-transcode-status' => 'වත්මන් අනු ලැකීම් තත්වය නරඹන්න',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'timedmedia-desc' => 'Obsluha súborov Ogg Theora a Vorbis s JavaScriptovým prehrávačom', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Zvukový súbor ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Video súbor ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Multimediálny súbor ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Zvukový súbor ogg $1, dĺžka $2, $3',
	'timedmedia-ogg-long-video' => 'Video súbor ogg $1, dĺžka $2, $4×$5 pixelov, $3',
	'timedmedia-ogg-long-multiplexed' => 'Multiplexovaný zvukový/video súbor ogg, $1, dĺžka $2, $4×$5 pixelov, $3 celkom',
	'timedmedia-ogg-long-general' => 'Multimediálny súbor ogg, dĺžka $2, $3',
	'timedmedia-ogg-long-error' => 'Neplatný súbor ogg: $1',
	'timedmedia-more' => 'viac...',
	'timedmedia-dismiss' => 'Zatvoriť',
	'timedmedia-download' => 'Stiahnuť súbor',
	'timedmedia-desc-link' => 'O tomto súbore',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 * @author Rzuwig
 */
$messages['sl'] = array(
	'timedmedia-desc' => 'Upravljavec zvoka, videa in časovnega besedila s podprtimi oblikami WebM, Ogg Theora, Vorbis in SubRip',
	'timedmedia-ogg-short-audio' => 'avdiodatoteka Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Videodatoteka Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Predstavnostna datoteka Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'avdiodatoteka Ogg $1, dolžine $2, $3',
	'timedmedia-ogg-long-video' => 'videodatoteka ogg $1, dolžine $2, $4 × $5 pik, $3',
	'timedmedia-ogg-long-multiplexed' => 'multipleksna avdio-/videodatoteka Ogg, $1, dolžine $2, $4 × $5 pik, skupaj $3',
	'timedmedia-ogg-long-general' => 'predstavnostna datoteka Ogg, dolžine $2, $3',
	'timedmedia-ogg-long-error' => 'Neveljavna datoteka Ogg: $1',
	'timedmedia-webm-short-video' => 'Videodatoteka WebM $1, $2',
	'timedmedia-webm-long-video' => 'Avdio-/videodatoteka WebM, $1, dolžine $2, $4 × $5 pik, skupaj $3',
	'timedmedia-flac-short-audio' => 'Datoteka z zvokom FLAC, $1',
	'timedmedia-flac-long-audio' => 'Datoteka z zvokom FLAC, dolžine $1, skupno $2',
	'timedmedia-wav-short-audio' => 'Datoteka z zvokom WAV, $1',
	'timedmedia-wav-long-audio' => 'Datoteka z zvokom WAV, dolžine $1, skupno $2',
	'timedmedia-wav-pcm-required' => 'Naložite lahko samo PCM (Pulse Code Modulation) WAV.',
	'timedmedia-mp4-short-video' => 'Videodatoteka MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'Avdio-/videodatoteka MP4, $1, dolžine $2, $4 × $5 pik, skupaj $3',
	'timedmedia-no-player-js' => 'Oprostite, vaš brskalnik ima onemogočen JavaScript ali pa nima nobenega podprtega predvajalnika.<br />
Posnetek lahko <a href="$1">snamete</a> ali <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">prenesete predvajalnik</a> za predvajanje posnetka v svojem brskalniku.',
	'timedmedia-more' => 'Več ...',
	'timedmedia-dismiss' => 'Zapri',
	'timedmedia-download' => 'Prenesi',
	'timedmedia-play-media' => 'Predvajaj',
	'timedmedia-desc-link' => 'O datoteki',
	'timedmedia-oggThumb-version' => 'OggHandler potrebuje oggThumb različice $1 ali več.',
	'timedmedia-oggThumb-failed' => 'OggThumbu ni uspelo ustvariti predogledne sličice.',
	'timedmedia-status-header' => 'Stanje prekodiranja',
	'timedmedia-update-status' => 'Posodobi stanje prekodiranja',
	'timedmedia-status' => 'Stanje',
	'timedmedia-status-unknown' => 'Neznano stanje',
	'timedmedia-transcodeinfo' => 'Opis prekodirne izpeljave',
	'timedmedia-actions' => 'Dejanja',
	'timedmedia-direct-link' => 'Prenos izpeljave',
	'timedmedia-not-ready' => 'Ni pripravljeno',
	'timedmedia-completed-on' => 'Prekodiranje končano $1',
	'timedmedia-error-on' => 'Napaka pri prekodiranju dne $1',
	'timedmedia-started-transcode' => 'Prekodiranje se je začelo pred $1. $2',
	'timedmedia-percent-done' => 'Končanih približno $1 %',
	'timedmedia-in-job-queue' => 'Dodano v čakalno vrsto pred $1',
	'timedmedia-unknown-target-size' => 'Neznana ciljna velikost, prekodirano $1',
	'timedmedia-days' => '$1 {{PLURAL:$1|dan|dneva|dnevi|dni}}',
	'timedmedia-hours' => '$1 {{PLURAL:$1|ura|uri|ure|ur}}',
	'timedmedia-minutes' => '$1 {{PLURAL:$1|minuta|minuti|minute|minut}}',
	'timedmedia-seconds' => '$1 {{PLURAL:$1|sekunda|sekundi|sekunde|sekund}}',
	'timedmedia-reset' => 'Ponastavi prekodiranje',
	'timedmedia-reset-confirm' => 'Ob ponastavitvi tega prekodiranja se bodo izbrisale vse obstoječe datoteke (če obstajajo), prekodiranje pa se bo ponovno dodalo v čakalno vrsto. Ponovno prekodiranje bo vzelo nekaj časa. <br /><br />Ste prepričani, da želite nadaljevati?',
	'timedmedia-reset-error' => 'Napaka pri ponastavljanju prekodiranja.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'vir $1',
	'timedmedia-source-file-desc' => 'Izvirna datoteka $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Izvirna datoteka $1 ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160P',
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg za majhno pasovno širino (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Spletni pretočni video Ogg (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Spletni pretočni video Ogg (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Visokokakovostni prenosni video Ogg (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Spletni pretočni WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM za pretakanje preko spleta (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM za pretakanje preko spleta (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Visokokakovostni WebM za prenos (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'Napravam prijazni MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Spletni pretočni WebM (160P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 kakovosti HD (720P)',
	'timedmedia-subtitle-new' => 'Ustvarite nov prevod ali uredite obstoječega',
	'timedmedia-subtitle-new-desc' => "Izberite jezik in pritisnite gumb '''{{int:Timedmedia-subtitle-new-go}}'''.",
	'timedmedia-subtitle-new-go' => 'Pojdi',
	'timedmedia-subtitle-language' => 'podnapisi v jeziku: $1 ($2)',
	'timedmedia-subtitle-no-video' => 'S trenutno podnaslovno stranjo ni povezan noben videoposnetek',
	'timedmedia-subtitle-no-subtitles' => 'V jeziku $1 trenutno ni nobenih podnapisov za ta video; stran lahko [{{fullurl:{{FULLPAGENAME}}|action=edit}} odprete za urejanje] in jih dodate.',
	'timedmedia-subtitle-remote' => 'Časovno besedilo datoteke gostuje na $1',
	'timedmedia-subtitle-remote-link' => '[$1 Ogledate si lahko opisno stran] datoteke na $2',
	'timedmediahandler' => 'Upravljavec časovne predstavnosti',
	'timedmedia-videos' => '{{PLURAL:$1|$ video|$ videa|$ videi|$ videov}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 video Ogg|$1 videa Ogg|$1 videi Ogg|$1 videov Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 video WebM|$1 videa WebM|$1 videi WebM|$1 videov WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|eno prekodiranje|dve prekodiranji|$1 prekodiranja|$1 prekodiranj}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|eno tekoče prekodiranje|dve tekoči prekodiranji|$1 prekodiranja|$1 prekodiranj}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|eno čakajoče prekodiranje|dve čakajoči prekodiranji|$1 čakajoča prekodiranja|$1 čakajočih prekodiranj}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|eno neuspelo prekodiranje|dve neuspeli prekodiranji|$1 neuspela prekodiranja|$1 neuspelih prekodiranj}}',
	'timedmedia-file' => 'Datoteka:',
	'right-transcode-reset' => 'Ponastavitev neuspelih ali pretvorjenih videov, da so ponovno vstavljeni v čakalno vrsto opravil',
	'right-transcode-status' => 'Ogled [[Special:TimedMediaHandler|informacij o trenutni dejavnosti pretvarjanja]]',
	'action-transcode-status' => 'ogled trenutnega stanja pretvorbe',
);

/** Albanian (shqip)
 * @author Dori
 */
$messages['sq'] = array(
	'timedmedia-ogg-short-audio' => 'Skedë zanore Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Skedë pamore Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Skedë mediatike Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'Skedë zanore Ogg $1, kohëzgjatja $2, $3',
	'timedmedia-ogg-long-video' => 'Skedë pamore Ogg $1, kohëzgjatja $2, $4×$5 pixel, $3',
	'timedmedia-more' => 'Më shumë...',
	'timedmedia-dismiss' => 'Mbylle',
	'timedmedia-download' => 'Shkarko skedën',
	'timedmedia-desc-link' => 'Rreth kësaj skede',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Millosh
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'timedmedia-desc' => 'Обрађивач за звук, видео и усклађени текст, с подршком за формате WebM, Ogg Theora, Vorbis и SRT',
	'timedmedia-ogg-short-audio' => 'Ogg $1 звучни фајл, $2.',
	'timedmedia-ogg-short-video' => 'Ogg $1 видео-снимак, $2.',
	'timedmedia-ogg-short-general' => 'Ogg $1 медијска датотека, $2.',
	'timedmedia-ogg-long-audio' => 'Ogg $1 звучни фајл, дужина $2, $3.',
	'timedmedia-ogg-long-video' => 'Ogg $1 видео-снимак, трајање $2, $4 × $5 пиксела, $3.',
	'timedmedia-ogg-long-multiplexed' => 'Мултиплексирани .ogg аудио/видео снимак, $1, трајање $2, $4 × $5 пиксела, $3.',
	'timedmedia-ogg-long-general' => 'Ogg медијски фајл, дужина $2, $3.',
	'timedmedia-ogg-long-error' => 'Неисправна .ogg датотека: $1.',
	'timedmedia-more' => 'Више...',
	'timedmedia-dismiss' => 'Затвори',
	'timedmedia-download' => 'Преузми датотеку',
	'timedmedia-desc-link' => 'Подаци о овој датотеци',
	'timedmedia-days' => '{{PLURAL:$1|дан|$1 дана|$1 дана}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|сат|$1 сата|$1 сати}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|минут|$1 минута|$1 минута}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|секунд|$1 секунде|$1 секунди}}', # Fuzzy
	'timedmedia-reset' => 'Поништи прекодирање',
	'timedmedia-reset-confirm' => 'Поништавање овог прекодирања ће уклонити постојећу датотеку (ако постоји) и вратити прекодирање на списак задатака. Ова радња може да потраје. <br /><br />
Желите ли да наставите?',
	'timedmedia-reset-error' => 'Грешка при поништавању задатака за прекодирање.',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-source-file' => 'Изворни $1',
	'timedmedia-source-file-desc' => 'Изворни $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-160p.ogv' => 'Ogg 160п',
	'timedmedia-derivative-desc-160p.ogv' => 'Нископропусни .ogg видео (160п)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360п',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg видео за емитовање (360п)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480п',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg видео за емитовање (480п)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720п',
	'timedmedia-derivative-desc-720p.ogv' => 'Висококвалитетни .ogg видео за преузимање (720п)',
	'timedmedia-derivative-360p.webm' => 'WebM 360п',
	'timedmedia-derivative-desc-360p.webm' => 'WebM за емитовање (360п)',
	'timedmedia-derivative-480p.webm' => 'WebM 480п',
	'timedmedia-derivative-desc-480p.webm' => 'WebM за емитовање (480п)',
	'timedmedia-derivative-720p.webm' => 'WebM 720п',
	'timedmedia-derivative-desc-720p.webm' => 'Висококвалитетни WebM за преузимање (720п)',
	'timedmedia-subtitle-language' => '$1 ($2) титлови',
	'timedmedia-subtitle-no-video' => 'Нема видео-снимака повезаних са текућом страницом с титловима',
	'timedmedia-subtitle-no-subtitles' => 'Тренутно нема $1 титлова за овај видео-снимак. Можете да их додате тако што ћете [{{fullurl:{{FULLPAGENAME}}|action=edit}} уредити страницу]',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 * @author Rancher
 */
$messages['sr-el'] = array(
	'timedmedia-desc' => 'Obrađivač za zvuk, video i usklađeni tekst, s podrškom za formate WebM, Ogg Theora, Vorbis i SRT',
	'timedmedia-ogg-short-audio' => 'Ogg $1 zvučni fajl, $2.',
	'timedmedia-ogg-short-video' => 'Ogg $1 video-snimak, $2.',
	'timedmedia-ogg-short-general' => 'Ogg $1 medijska datoteka, $2.',
	'timedmedia-ogg-long-audio' => 'Ogg $1 zvučni fajl, dužina $2, $3.',
	'timedmedia-ogg-long-video' => 'Ogg $1 video-snimak, trajanje $2, $4 × $5 piksela, $3.',
	'timedmedia-ogg-long-multiplexed' => 'Multipleksirani .ogg audio/video snimak, $1, trajanje $2, $4 × $5 piksela, $3.',
	'timedmedia-ogg-long-general' => 'Ogg medijski fajl, dužina $2, $3.',
	'timedmedia-ogg-long-error' => 'Neispravna .ogg datoteka: $1.',
	'timedmedia-more' => 'Više...',
	'timedmedia-dismiss' => 'Zatvori',
	'timedmedia-download' => 'Preuzmi datoteku',
	'timedmedia-desc-link' => 'Podaci o ovoj datoteci',
	'timedmedia-days' => '{{PLURAL:$1|dan|$1 dana|$1 dana}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|sat|$1 sata|$1 sati}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|minut|$1 minuta|$1 minuta}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|sekund|$1 sekunde|$1 sekundi}}', # Fuzzy
	'timedmedia-reset' => 'Poništi prekodiranje',
	'timedmedia-reset-confirm' => 'Poništavanje ovog prekodiranja će ukloniti postojeću datoteku (ako postoji) i vratiti prekodiranje na spisak zadataka. Ova radnja može da potraje. <br /><br />
Želite li da nastavite?',
	'timedmedia-reset-error' => 'Greška pri poništavanju zadataka za prekodiranje.',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-source-file' => 'Izvorni $1',
	'timedmedia-source-file-desc' => 'Izvorni $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-derivative-160p.ogv' => 'Ogg 160p',
	'timedmedia-derivative-desc-160p.ogv' => 'Niskopropusni .ogg video (160p)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360p',
	'timedmedia-derivative-desc-360p.ogv' => 'Ogg video za emitovanje (360p)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480p',
	'timedmedia-derivative-desc-480p.ogv' => 'Ogg video za emitovanje (480p)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720p',
	'timedmedia-derivative-desc-720p.ogv' => 'Visokokvalitetni .ogg video za preuzimanje (720p)',
	'timedmedia-derivative-360p.webm' => 'WebM 360p',
	'timedmedia-derivative-desc-360p.webm' => 'WebM za emitovanje (360p)',
	'timedmedia-derivative-480p.webm' => 'WebM 480p',
	'timedmedia-derivative-desc-480p.webm' => 'WebM za emitovanje (480p)',
	'timedmedia-derivative-720p.webm' => 'WebM 720p',
	'timedmedia-derivative-desc-720p.webm' => 'Visokokvalitetni WebM za preuzimanje (720p)',
	'timedmedia-subtitle-language' => '$1 ($2) titlovi',
	'timedmedia-subtitle-no-video' => 'Nema video-snimaka povezanih sa tekućom stranicom s titlovima',
	'timedmedia-subtitle-no-subtitles' => 'Trenutno nema $1 titlova za ovaj video-snimak. Možete da ih dodate tako što ćete [{{fullurl:{{FULLPAGENAME}}|action=edit}} urediti stranicu]',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'timedmedia-desc' => 'Stjuurengsprogramm foar Ogg Theora- un Vorbis-Doatäie, inklusive n JavaScript-Ouspielsoftware', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg-$1-Audiodoatäi, $2',
	'timedmedia-ogg-short-video' => 'Ogg-$1-Videodoatäi, $2',
	'timedmedia-ogg-short-general' => 'Ogg-$1-Mediadoatäi, $2',
	'timedmedia-ogg-long-audio' => 'Ogg-$1-Audiodoatäi, Loangte: $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg-$1-Videodoatäi, Loangte: $2, $4×$5 Pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg-Audio-/Video-Doatäi, $1, Loangte: $2, $4×$5 Pixel, $3',
	'timedmedia-ogg-long-general' => 'Ogg-Mediadoatäi, Loangte: $2, $3',
	'timedmedia-ogg-long-error' => 'Uungultige Ogg-Doatäi: $1',
	'timedmedia-more' => 'Optione …',
	'timedmedia-dismiss' => 'Sluute',
	'timedmedia-download' => 'Doatäi spiekerje',
	'timedmedia-desc-link' => 'Uur disse Doatäi',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'timedmedia-ogg-short-audio' => 'Koropak sora $1 ogg, $2',
	'timedmedia-ogg-short-video' => 'Koropak vidéo $1 ogg, $2',
	'timedmedia-ogg-short-general' => 'Koropak média $1 ogg, $2',
	'timedmedia-ogg-long-audio' => 'Koropak sora $1 ogg, lilana $2, $3',
	'timedmedia-ogg-long-video' => 'Koropak vidéo $1 ogg, lilana $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Koropak sora/vidéo ogg multipléks, $1, lilana $2, $4×$5 piksel, $3 gembleng',
	'timedmedia-ogg-long-general' => 'Koropak média ogg, lilana $2, $3',
	'timedmedia-ogg-long-error' => 'Koropak ogg teu valid: $1',
	'timedmedia-more' => 'Lianna...',
	'timedmedia-dismiss' => 'Tutup',
	'timedmedia-download' => 'Bedol',
	'timedmedia-desc-link' => 'Ngeunaan ieu koropak',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jon Harald Søby
 * @author Jopparn
 * @author Lejonel
 * @author Rotsee
 * @author Skalman
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'timedmedia-desc' => 'Hanterare för ljud-, video- och tidsbestämd text, med stöd för format WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Ogg $1 ljudfil, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 videofil, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 mediafil, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ljudfil, längd $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 videofil, längd $2, $4×$5 pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multiplexad ljud/video-fil, $1, längd $2, $4×$5 pixel, $3 totalt',
	'timedmedia-ogg-long-general' => 'Ogg mediafil, längd $2, $3',
	'timedmedia-ogg-long-error' => 'Felaktig Ogg-fil: $1',
	'timedmedia-webm-short-video' => 'WebM $1 videofil, $2',
	'timedmedia-webm-long-video' => 'WebM-fil för ljud/video, $1, längd $2, $4 × $5 pixlar, $3 totalt',
	'timedmedia-wav-short-audio' => 'WAV-ljudfil, $1',
	'timedmedia-mp4-short-video' => 'MP4 $1 videofil, $2',
	'timedmedia-mp4-long-video' => 'MP4-fil för ljud/video, $1, längd $2, $4 × $5 pixlar, $3 totalt',
	'timedmedia-no-player-js' => 'Tyvärr, din webbläsare har antingen JavaScript inaktiverat eller inte någon spelare som stöds.<br />
Du kan <a href="$1">ladda ner klippet</a> eller <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">hämta en spelare</a> för att spela upp klippet i din webbläsare.',
	'timedmedia-more' => 'Mer...',
	'timedmedia-dismiss' => 'Stäng',
	'timedmedia-download' => 'Ladda ner filen',
	'timedmedia-play-media' => 'Spela upp media',
	'timedmedia-desc-link' => 'Om filen',
	'timedmedia-oggThumb-version' => 'OggHandler kräver oggThumb version $1 eller senare.',
	'timedmedia-oggThumb-failed' => 'oggThumb misslyckades med att skapa miniatyrbilden.',
	'timedmedia-status' => 'Status',
	'timedmedia-status-unknown' => 'Okänd status',
	'timedmedia-actions' => 'Åtgärder',
	'timedmedia-not-ready' => 'Inte redo',
	'timedmedia-percent-done' => 'Ungefär $1% klar',
	'timedmedia-in-job-queue' => 'Lades till i jobbkön för $1sedan',
	'timedmedia-unknown-target-size' => 'Okänd målstorlek, $1-kodad',
	'timedmedia-days' => '{{PLURAL:$1|1 dag|$1 dagar}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 timme|$1 timmar}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minut|$1 minuter}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 sekund|$1 sekunder}}',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1 Källa',
	'timedmedia-source-file-desc' => 'Ursprunglig $1-fil, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Ursprunglig $1-fil ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Låg bandbredd Ogg-video (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Webbströmningsbar Ogg-video (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Webbströmningsbar Ogg-video (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Högkvalitets nedladdningsbar Ogg-video (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'Webbströmningsbar WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Webbströmningsbar WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Webbströmningsbar WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Högkvalitets nedladdningsbar WebM (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'Enhetsvänlig MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'Webbströmningsbar MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'HD-kvalitet MP4 (720P)',
	'timedmedia-subtitle-new' => 'Skapa ny översättning eller redigera befintlig',
	'timedmedia-subtitle-new-desc' => "Välj språk och tryck på knappen '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Gå',
	'timedmedia-subtitle-language' => '$1 ($2) undertexter',
	'timedmedia-subtitle-no-video' => 'Det finns ingen video som är associerade med den aktuella undertextssidan',
	'timedmedia-subtitle-no-subtitles' => 'Det finns för närvarande ingen textning på $1 för denna video, du kan [{{fullurl:{{FULLPAGENAME}}|action=edit}} redigera denna sida] för att lägga till dem',
	'timedmedia-subtitle-remote-link' => 'Du kan [$1 visa beskrivningssidan] för denna fil på $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 videoklipp|$1 videoklipp}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg-video|$1 Ogg-videor}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM-video|$1 WebM-videor}}',
	'timedmedia-file' => 'Fil',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'timedmedia-download' => 'Pakua faili',
	'timedmedia-desc-link' => 'Kuhusu faili hii',
	'timedmedia-status' => 'Hali',
	'timedmedia-actions' => 'Vitendo',
	'timedmedia-not-ready' => 'Haiko tayari',
	'timedmedia-subtitle-new-go' => 'Nenda',
	'timedmedia-file' => 'Faili',
);

/** Tamil (தமிழ்)
 * @author Balajijagadesh
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'timedmedia-ogg-long-general' => 'Ogg  ஊடக கோப்பு,  நீளம்   $2 , $3',
	'timedmedia-ogg-long-error' => 'செல்லாத ogg கோப்பு: $1',
	'timedmedia-more' => 'மேலும்...',
	'timedmedia-dismiss' => 'மூடுக',
	'timedmedia-download' => 'கோப்பை பதிவிறக்கம் செய்',
	'timedmedia-play-media' => 'ஊடகத்தை ஓடவிடு',
	'timedmedia-desc-link' => 'இந்தக் கோப்பைப் பற்றி',
	'timedmedia-status' => 'நிலை',
	'timedmedia-status-unknown' => 'அறியப்படாத நிலை',
	'timedmedia-actions' => 'செயல்கள்',
	'timedmedia-not-ready' => 'தயாராக இல்லை',
	'timedmedia-percent-done' => 'ஏறத்தாழ $1% முடிந்தது',
	'timedmedia-mp4' => 'எம்பி4',
	'timedmedia-source-file' => '$1 மூலம்',
	'timedmedia-source-file-desc' => 'மூல $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-subtitle-new' => 'புதிய மொழிபெயர்ப்பை உருவாக்கவும் அல்லது உள்ளதைத் தொகுக்கவும்',
	'timedmedia-subtitle-new-go' => 'செல்',
	'timedmedia-subtitle-language' => '$1 ($2) துணைத்தலைப்புக்கள்',
	'timedmedia-videos' => '{{PLURAL:$1|$1 காணொளி|$1 காணொளிகள்}}',
	'timedmedia-file' => 'கோப்பு',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Veeven
 * @author వైజాసత్య
 */
$messages['te'] = array(
	'timedmedia-ogg-short-audio' => 'Ogg $1 శ్రావ్యక ఫైలు, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 వీడియో ఫైలు, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 మీడియా ఫైలు, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 శ్రవణ ఫైలు, నిడివి $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 వీడియో ఫైలు, నిడివి $2, $4×$5 పిక్సెళ్ళు, $3',
	'timedmedia-ogg-long-multiplexed' => 'ఓగ్ మల్టిప్లెక్సుడ్ శ్రవణ/దృశ్యక ఫైలు, $1, నిడివి $2, $4×$5 పిక్సెళ్ళు, $3 మొత్తం',
	'timedmedia-ogg-long-general' => 'Ogg మీడియా ఫైలు, నిడివి $2, $3',
	'timedmedia-ogg-long-error' => 'తప్పుడు ogg ఫైలు: $1',
	'timedmedia-more' => 'మరిన్ని...',
	'timedmedia-dismiss' => 'మూసివేయి',
	'timedmedia-download' => 'ఫైలుని దిగుమతి చేసుకోండి',
	'timedmedia-desc-link' => 'ఈ ఫైలు గురించి',
	'timedmedia-status' => 'స్థితి',
	'timedmedia-status-unknown' => 'తెలియని స్థితి',
	'timedmedia-actions' => 'చర్యలు',
	'timedmedia-days' => '{{PLURAL:$1|రోజు|$1 రోజులు}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|గంట|$1 గంటలు}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|నిమిషం|$1 నిమిషాలు}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|క్షణం|$1 క్షణాలు}}', # Fuzzy
	'timedmedia-source-file-desc' => 'అసలు $1, $2 × $3 ($4)', # Fuzzy
	'timedmedia-subtitle-new-go' => 'వెళ్ళు',
	'timedmedia-subtitle-language' => '$1 ($2) ఉపశీర్షికలు',
	'timedmedia-file' => 'దస్త్రం',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'timedmedia-desc' => 'Ба дастгирандае барои парвандаҳои  Ogg Theora ва Vorbis, бо пахшкунандаи JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 парвандаи савтӣ, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 парвандаи наворӣ, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 парвандаи расона, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 парвандаи савтӣ, тӯл $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 парвандаи наворӣ, тӯл $2, $4×$5 пикселҳо, $3',
	'timedmedia-ogg-long-multiplexed' => 'Парвандаи Ogg савтӣ/наворӣ печида, $1, тӯл $2, $4×$5 пикселҳо, дар маҷмӯъ $3',
	'timedmedia-ogg-long-general' => 'Парвандаи расонаи Ogg, тӯл $2, $3',
	'timedmedia-ogg-long-error' => 'Парвандаи ғайримиҷози ogg: $1',
	'timedmedia-more' => 'Бештар...',
	'timedmedia-dismiss' => 'Бастан',
	'timedmedia-download' => 'Боргирии парванда',
	'timedmedia-desc-link' => 'Дар бораи ин парванда',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'timedmedia-desc' => 'Ba dastgirandae baroi parvandahoi  Ogg Theora va Vorbis, bo paxşkunandai JavaScript', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 parvandai savtī, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 parvandai navorī, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 parvandai rasona, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 parvandai savtī, tūl $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 parvandai navorī, tūl $2, $4×$5 pikselho, $3',
	'timedmedia-ogg-long-multiplexed' => "Parvandai Ogg savtī/navorī pecida, $1, tūl $2, $4×$5 pikselho, dar maçmū' $3",
	'timedmedia-ogg-long-general' => 'Parvandai rasonai Ogg, tūl $2, $3',
	'timedmedia-ogg-long-error' => 'Parvandai ƣajrimiçozi ogg: $1',
	'timedmedia-more' => 'Beştar...',
	'timedmedia-dismiss' => 'Bastan',
	'timedmedia-download' => 'Borgiriji parvanda',
	'timedmedia-desc-link' => 'Dar borai in parvanda',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'timedmedia-desc' => 'Ogg Theora we Vorbis faýllary üçin işleýji, JavaScript pleýeri bilen bilelikde', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 ses faýly, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 wideo faýly, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 media faýly, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ses faýly, uzynlyk $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 wideo faýly, uzynlyk $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg multipleks audio/wideo faýly, $1, uzynlyk $2, $4×$5 piksel, $3 jemi',
	'timedmedia-ogg-long-general' => 'Ogg media faýly, uzynlyk $2, $3',
	'timedmedia-ogg-long-error' => 'Nädogry ogg faýly: $1',
	'timedmedia-more' => 'Has köp...',
	'timedmedia-dismiss' => 'Ýap',
	'timedmedia-download' => 'Faýl düşür',
	'timedmedia-desc-link' => 'Bu faýl hakda',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Sky Harbor
 */
$messages['tl'] = array(
	'timedmedia-desc' => 'Tagahawak para sa audio, bidyo at inoorasang teksto, na may pagtangkilik ng anyo para sa WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => '$1 na talaksang pangtunog ng Ogg, $2',
	'timedmedia-ogg-short-video' => "$1 talaksang pampalabas (''video'') ng Ogg, $2",
	'timedmedia-ogg-short-general' => '$1 talaksang pangmidya ng Ogg, $2',
	'timedmedia-ogg-long-audio' => '$1 talaksang pantunog ng Ogg, haba $2, $3',
	'timedmedia-ogg-long-video' => '$1 talaksan ng palabas ng Ogg, haba $2, $4×$5 mga piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'magkasanib at nagsasabayang talaksang nadirinig o audio/palabas ng Ogg, $1, haba $2, $4×$5 mga piksel, $3 sa kalahatan',
	'timedmedia-ogg-long-general' => "Talaksang pangmidya ng ''Ogg'', haba $2, $3",
	'timedmedia-ogg-long-error' => "Hindi tanggap na talaksang ''ogg'': $1",
	'timedmedia-webm-short-video' => '$1 na talaksan ng bidyo ng WebM, $2',
	'timedmedia-webm-long-video' => 'Talaksang pamparinig/bidyo ng WebM, $1, haba $2, $4 × $5 mga piksel, $3 lahat-lahat',
	'timedmedia-no-player-js' => 'Paumahin, ang pantingin-tingin mo ay maaaring may hindi gumaganang JavaScript o walang anumang tinatangkilik na pampaandar.<br />
Maaari kang <a href="$1">magkargang pababa ng kaputol</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">magkargang pababa ng isang pampaandar</a> upang mapaandar ang kaputol sa loob ng iyong pantingin-tingin.',
	'timedmedia-more' => 'Marami pa…',
	'timedmedia-dismiss' => 'Isara',
	'timedmedia-download' => 'Ikarga ang talaksan',
	'timedmedia-play-media' => 'Paandarin ang midya',
	'timedmedia-desc-link' => 'Tungkol sa talaksang ito',
	'timedmedia-oggThumb-version' => 'Nangangailangan ang OggHandler ng bersyong $1 o mas luma ng oggThumb.',
	'timedmedia-oggThumb-failed' => 'Nabigong lumikha ang oggThumb ng munting larawan.',
	'timedmedia-status-header' => 'Katayuan ng transkodigo',
	'timedmedia-update-status' => 'Isapanahon ang katayuan ng transkodigo',
	'timedmedia-status' => 'Katayuan',
	'timedmedia-status-unknown' => 'Hindi alam na katayuan',
	'timedmedia-transcodeinfo' => 'Paglalarawan sa hinangong transkodigo',
	'timedmedia-actions' => 'Mga kilos',
	'timedmedia-direct-link' => 'Ikargang paibaba ang hinango',
	'timedmedia-not-ready' => 'Hindi nakahanda',
	'timedmedia-completed-on' => 'Nabuo ang transkodigo noong $1',
	'timedmedia-error-on' => 'Kamalian sa transkodigo noong $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Nagsimula ang transkodigo noong $1 na ang nakalilipas. $2',
	'timedmedia-percent-done' => 'Halos $1% na ang natatapos',
	'timedmedia-in-job-queue' => 'Idinagdag sa pila ng Gawain noong $1 na ang nakalilipas',
	'timedmedia-unknown-target-size' => 'Hindi nalalaman na puntiryang sukat, $1 naisakodigo',
	'timedmedia-days' => '{{PLURAL:$1|araw|$1 mga araw}}', # Fuzzy
	'timedmedia-hours' => '{{PLURAL:$1|horas|$1 mga oras}}', # Fuzzy
	'timedmedia-minutes' => '{{PLURAL:$1|minuto|$1 mga minuto}}', # Fuzzy
	'timedmedia-seconds' => '{{PLURAL:$1|segundo|$1 mga segundo}}', # Fuzzy
	'timedmedia-reset' => 'Itakdang muli ang transkodigo',
	'timedmedia-reset-confirm' => 'Ang muling pagtatakda ng transkodigong ito ay magtatanggal ng anumang umiiral na talaksan (kung naroroon), at muling nitong idaragdag ang transkodigo sa pila ng trabaho. Gugugol ito ng ilang panahon upang muling maitranskodigo. <br /><br />
Nakatitiyak ka ba na nais mong magpatuloy?',
	'timedmedia-reset-error' => 'Kamalian sa gawain ng muling pagtatakda ng transkodigo.',
	'timedmedia-ogg' => 'Ogg',
	'timedmedia-webm' => 'WebM',
	'timedmedia-source-file' => '$1 pinagkukunan',
	'timedmedia-source-file-desc' => 'Orihinal na $1, $2 × $3 ( $4)', # Fuzzy
	'timedmedia-derivative-160p.ogv' => 'Ogg 160P',
	'timedmedia-derivative-desc-160p.ogv' => 'Mababang lapad ng paha ng bidyo ng Ogg (160P)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360P',
	'timedmedia-derivative-desc-360p.ogv' => 'Mapapaanod sa Web na bidyo ng Ogg (360P)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480P',
	'timedmedia-derivative-desc-480p.ogv' => 'Mapapaanod sa Web na bidyo ng Ogg (480P)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720P',
	'timedmedia-derivative-desc-720p.ogv' => 'Mataas na uri ng bidyo ng Ogg na maikakargang paibaba (720P)',
	'timedmedia-derivative-160p.webm' => 'WebM 160P',
	'timedmedia-derivative-desc-160p.webm' => 'Mapapaanod sa Web na WebM (160P)',
	'timedmedia-derivative-360p.webm' => 'WebM 360P',
	'timedmedia-derivative-desc-360p.webm' => 'Mapapaanod sa Web na WebM (360P)',
	'timedmedia-derivative-480p.webm' => 'WebM 480P',
	'timedmedia-derivative-desc-480p.webm' => 'Mapapaanod sa Web na WebM (480P)',
	'timedmedia-derivative-720p.webm' => 'WebM 720P',
	'timedmedia-derivative-desc-720p.webm' => 'Mataas na uri ng WebM na maikakargang paibaba (720P)',
	'timedmedia-subtitle-new' => 'Lumikha ng bagong salinwika o baguhin ang umiiral na',
	'timedmedia-subtitle-new-desc' => "Palitan ang bahaging '''$1''' ng iyong [[:en:ISO 639|kodigo ng wika]] at pindutin ang pindutang '''{{int:Timedmedia-subtitle-new-go}}'''", # Fuzzy
	'timedmedia-subtitle-new-go' => 'Gawin',
	'timedmedia-subtitle-language' => '$1 ($2) kabahaging mga pamagat',
	'timedmedia-subtitle-no-video' => 'Walang bidyo na may kaugnayan sa pangkasalukuyang pahina ng kabahaging pamagat',
	'timedmedia-subtitle-no-subtitles' => 'Kasalukuyang walang mga kabahaging pamagat sa loob ng $1 para sa bidyong ito, maaari mong [{{fullurl:{{FULLPAGENAME}}|action=edit}} baguhin ang pahinang ito] upang maidagdag ang mga ito',
	'timedmediahandler' => 'Inoorasang Panghawak ng Midya',
	'timedmedia-videos' => '{{PLURAL:$1|$1 bidyo|$1 mga bidyo}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 bidyo ng Ogg|$1 mga bidyo ng Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 bidyo ng WebM|$1 mga bidyo ng WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transkodigo|$1 mga transkodigo}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 tumatakbong transkodigo|$1 tumatakbong mga transkodigo}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 nakapilang transkodigo|$1 nakapilang mga transkodigo}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 nabigong transkodigo|$1 nabigong mga transkodigo}}',
	'timedmedia-file' => 'Talaksan',
);

/** толышә зывон (толышә зывон)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'timedmedia-subtitle-new-go' => 'Давардеј',
);

/** Turkish (Türkçe)
 * @author Erkan Yilmaz
 * @author Joseph
 * @author Mach
 * @author Runningfridgesrule
 * @author Srhat
 */
$messages['tr'] = array(
	'timedmedia-desc' => 'Ogg Theora ve Vorbis dosyaları için işleyici, JavaScript oynatıcısı ile', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 ses dosyası, $2',
	'timedmedia-ogg-short-video' => 'Ogg $1 film dosyası, $2',
	'timedmedia-ogg-short-general' => 'Ogg $1 medya dosyası, $2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 ses dosyası, süre $2, $3',
	'timedmedia-ogg-long-video' => 'Ogg $1 film dosyası, süre $2, $4×$5 piksel, $3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg çok düzeyli ses/film dosyası, $1, süre $2, $4×$5 piksel, $3 genelde',
	'timedmedia-ogg-long-general' => 'Ogg medya dosyası, süre $2, $3',
	'timedmedia-ogg-long-error' => 'Geçersiz ogg dosyası: $1',
	'timedmedia-more' => 'Daha...',
	'timedmedia-dismiss' => 'Kapat',
	'timedmedia-download' => 'Dosya indir',
	'timedmedia-desc-link' => 'Bu dosya hakkında',
);

/** Tsonga (Xitsonga)
 * @author Thuvack
 */
$messages['ts'] = array(
	'timedmedia-more' => 'Swinwana…',
	'timedmedia-dismiss' => 'Pfala',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'timedmedia-more' => 'Тулырак...',
	'timedmedia-dismiss' => 'Ябу',
	'timedmedia-download' => 'Файлны алу',
	'timedmedia-desc-link' => 'Файл турында мәгълүмат',
	'timedmedia-oggThumb-version' => 'OggHandler $1 юрамасыннан да югарырак oggThumb тәэминатын сорый.',
	'timedmedia-oggThumb-failed' => 'oggThumb нигезендә миниатюраны ясап булмады.',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'timedmedia-mp4' => 'MP4',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'timedmedia-dismiss' => 'ياپ',
	'timedmedia-status' => 'ھالەت',
	'timedmedia-actions' => 'مەشغۇلات',
	'timedmedia-not-ready' => 'تەييار ئەمەس',
	'timedmedia-subtitle-new-go' => 'يۆتكەل',
	'timedmedia-file' => 'ھۆججەت',
);

/** Ukrainian (українська)
 * @author AS
 * @author Ahonc
 * @author Andriykopanytsia
 * @author AtUkr
 * @author Base
 * @author NickK
 * @author Olvin
 * @author Prima klasy4na
 * @author Steve.rusyn
 * @author SteveR
 * @author Тест
 */
$messages['uk'] = array(
	'timedmedia-desc' => 'Оброблювач для аудіо, відео і субтитрів з підтримкою форматів WebM, Ogg Theora, Vorbis, srt',
	'timedmedia-ogg-short-audio' => 'Звуковий файл Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'Відео-файл Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'Файл Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'звуковий файл Ogg $1, довжина $2, $3',
	'timedmedia-ogg-long-video' => 'відео-файл Ogg $1, довжина $2, $4×$5 пікселів, $3',
	'timedmedia-ogg-long-multiplexed' => 'мультиплексний аудіо/відео-файл ogg, $1, довжина $2, $4×$5 пікселів, $3 усього',
	'timedmedia-ogg-long-general' => 'медіа-файл Ogg, довжина $2, $3',
	'timedmedia-ogg-long-error' => 'Неправильний Ogg-файл: $1',
	'timedmedia-webm-short-video' => 'WebM $1 відео-файл, $2',
	'timedmedia-webm-long-video' => 'WebM аудіо/відео файл, $1, тривалість $2, $4 × $5 {{PLURAL:$5|піксель|пікселі|пікселів}}, всього $3',
	'timedmedia-flac-short-audio' => 'FLAC аудіо-файл,$1',
	'timedmedia-flac-long-audio' => 'FLAC аудіо-файл, тривалість $1, $2 швидкість',
	'timedmedia-wav-short-audio' => 'Аудіо-файл WAV, $1',
	'timedmedia-wav-long-audio' => 'Аудіо-файл WAV, тривалість $1, $2 швидкість',
	'timedmedia-wav-pcm-required' => 'Ви можете тільки завантажити PCM (імпульсно-кодова модуляція) WAV.',
	'timedmedia-mp4-short-video' => 'MP4 $1 відео-файл, $2',
	'timedmedia-mp4-long-video' => 'MP4 аудіо/відео файл, $1, тривалість $2, $4 × $5 {{PLURAL:$5|піксель|пікселі|пікселів}}, всього $3',
	'timedmedia-no-player-js' => 'На жаль, у Вашому браузері вимкнено JavaScript і не підтримується жодного програвача.<br />
Ви можете <a href="$1">завантажити ролик</a> або <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">завантажити програвач</a> для відтворенні ролику у браузері.',
	'timedmedia-more' => 'Більше…',
	'timedmedia-dismiss' => 'Закрити',
	'timedmedia-download' => 'Завантажити файл',
	'timedmedia-play-media' => 'Відтворити',
	'timedmedia-desc-link' => 'Інформація про цей файл',
	'timedmedia-oggThumb-version' => 'OggHandler вимагає oggThumb версії $1 або більш пізньої.',
	'timedmedia-oggThumb-failed' => 'oggThumb не вдалось створити мініатюру.',
	'timedmedia-status-header' => 'Статус декодування',
	'timedmedia-update-status' => 'Оновити статус декодування',
	'timedmedia-status' => 'Статус',
	'timedmedia-status-unknown' => 'Невідомий статус',
	'timedmedia-transcodeinfo' => 'Опис похідних декодування',
	'timedmedia-actions' => 'Дії',
	'timedmedia-direct-link' => 'Завантажити похідний варіант',
	'timedmedia-not-ready' => 'Не готово',
	'timedmedia-completed-on' => 'Завершено декодування $1',
	'timedmedia-error-on' => 'Помилка при декодуванні $1.',
	'timedmedia-started-transcode' => 'Декодування розпочато $1 назад. $2',
	'timedmedia-percent-done' => 'Приблизно $1% готово',
	'timedmedia-in-job-queue' => 'Додано до черги завдань $1 назад',
	'timedmedia-unknown-target-size' => 'Невідомий цільовий розмір, $1 при кодуванні',
	'timedmedia-days' => '$1 {{PLURAL:$1|день|дні|днів}}',
	'timedmedia-hours' => '$1 {{PLURAL:$1|гадину|години|годин}}',
	'timedmedia-minutes' => '$1 {{PLURAL:$1|хвилину|хвилини|хвилин}}',
	'timedmedia-seconds' => '$1 {{PLURAL:$1|секунду|секунди|секунд}}',
	'timedmedia-reset' => 'Перезапуск декодування',
	'timedmedia-reset-confirm' => 'Перезапуск декодування видалить наявний файл (якщо він існує), і  декодування знов буде додано в чергу завдань. Повторне декодування займе якийсь час. <br /><br />
Ви упевнені, що хочете продовжити?',
	'timedmedia-reset-error' => 'Помилка при перезапуску декодування.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Джерело $1',
	'timedmedia-source-file-desc' => 'Оригінальний $1 файл, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Оригінальний $1 файл ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Ogg-відео низької якості (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Потокове Ogg-відео (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Потокове Ogg-відео (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Високоякісне Ogg-відео (720P) для завантаження',
	'timedmedia-derivative-desc-160p.webm' => 'Потокове WebM (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'Потокове WebM (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'Потокове WebM (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'Високоякісне WebM (720P) для завантаження',
	'timedmedia-derivative-desc-320p.mp4' => 'Сумісний з MP$ (320P) пристрій',
	'timedmedia-derivative-desc-480p.mp4' => 'Веб-потокове MP4 (480 Р)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 якості HD (720P)',
	'timedmedia-subtitle-new' => 'Створити новий переклад або відредагувати існуючий',
	'timedmedia-subtitle-new-desc' => "Виберіть мову та натисніть '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Перейти',
	'timedmedia-subtitle-language' => '$1 ($2) субтитри',
	'timedmedia-subtitle-no-video' => "Немає відео, пов'язаного з поточною сторінкою субтитрів",
	'timedmedia-subtitle-no-subtitles' => 'В даний час немає субтитрів на $1 для цього відео, Ви можете [{{fullurl:{{FULLPAGENAME}}|action=edit}} змінити цю сторінку] для їх додавання',
	'timedmedia-subtitle-remote' => 'Текст до цього файлу розміщений на $1',
	'timedmedia-subtitle-remote-link' => 'Ви можете [$1 переглянути опис сторінки] для цього файлу на $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 відео}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 Ogg відео}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 WebM відео}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 перекодування|$1 перекодувань}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 працюючі перекодування|$1 працюючих перекодувань}}',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 перекодування в черзі|$1 перекодувань в черзі}}',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 невдалі перекодування|$1 невдалих перекодувань}}',
	'timedmedia-file' => 'Файл',
	'right-transcode-reset' => 'Скинуто невдалі або перекодовані відео, тож вони знову занесені в чергу завдань.',
	'right-transcode-status' => 'Перегляньте [[Special:TimedMediaHandler|інформацію про поточну перекодувальну діяльність]]',
	'action-transcode-status' => 'Перегляд поточного стану перекодування',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'timedmedia-more' => 'مزید...',
	'timedmedia-dismiss' => 'بند',
	'timedmedia-download' => 'فائل ڈاؤن لوڈ ، اتارنا',
	'timedmedia-play-media' => 'کھیلنے کے میڈیا',
	'timedmedia-desc-link' => 'اس فائل کے بارے میں',
	'timedmedia-status' => 'حیثیت',
	'timedmedia-status-unknown' => 'نامعلوم مقام',
	'timedmedia-actions' => 'اعمال',
	'timedmedia-file' => 'فائل',
);

/** vèneto (vèneto)
 * @author Candalua
 * @author GatoSelvadego
 */
$messages['vec'] = array(
	'timedmedia-desc' => "Gestor pa' i file audio, video e có sototitołi; formati suportai: WebM, Ogg Theora, Vorbis, srt",
	'timedmedia-ogg-short-audio' => 'File audio Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'File video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'File multimedial Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'File audio Ogg $1, durata $2, $3',
	'timedmedia-ogg-long-video' => 'File video Ogg $1, durata $2, dimensioni $4×$5 pixel, $3',
	'timedmedia-ogg-long-multiplexed' => 'File audio/video multiplexed Ogg $1, durata $2, dimensioni $4×$5 pixel, conplessivamente $3',
	'timedmedia-ogg-long-general' => 'File multimedial Ogg, durata $2, $3',
	'timedmedia-ogg-long-error' => 'File ogg mìa valido: $1',
	'timedmedia-webm-short-video' => 'File video WebM $1, $2',
	'timedmedia-webm-long-video' => 'File audio/video WebM $1, durata $2, dimension $4×$5 pixel, conplesivamente $3',
	'timedmedia-mp4-short-video' => 'File video MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'File audio/video MP4 $1, durata $2, dimension $4×$5 pixel, conplesivamente $3',
	'timedmedia-no-player-js' => 'El to browser el gà JavaScript destacà, opure no\'l gà nissun riprodutor suportà.<br />
Te pol <a href="$1">descargar el file multimediale</a> o <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">un riprodutor</a> par farlo \'ndar sul to browser.',
	'timedmedia-more' => 'Altro...',
	'timedmedia-dismiss' => 'Sara',
	'timedmedia-download' => 'Descarga el file',
	'timedmedia-play-media' => 'Riproduxi el file multimediałe',
	'timedmedia-desc-link' => 'Informazion su sto file',
	'timedmedia-oggThumb-version' => 'Par OggHandler ghe vole oggThumb version $1 o sucessiva.',
	'timedmedia-oggThumb-failed' => "oggThumb no'l xe stà bon de crear la miniadura.",
	'timedmedia-status-header' => 'Stato transcodifega',
	'timedmedia-update-status' => 'Axorna stato transcodifega',
	'timedmedia-status' => 'Stato',
	'timedmedia-status-unknown' => 'Stato sconosùo',
	'timedmedia-transcodeinfo' => 'Descrision derivà dal Transcodexe',
	'timedmedia-actions' => 'Asion',
	'timedmedia-direct-link' => 'Descarga derivà',
	'timedmedia-not-ready' => 'Nó pronto',
	'timedmedia-completed-on' => 'Transodifega conpletà $1',
	'timedmedia-error-on' => 'Eror inte ła transcodifega so $1.', # Fuzzy
	'timedmedia-started-transcode' => 'Transcodifega tacà $1 fa. $2',
	'timedmedia-percent-done' => '$1% sirca conpletà',
	'timedmedia-in-job-queue' => 'Xontà a ła coa de laoro  $1  fa',
	'timedmedia-unknown-target-size' => 'Dimension de destinasion sconosùa, $1 codifegà',
	'timedmedia-days' => '{{PLURAL:$1|1 xorno|$1 xorni}}',
	'timedmedia-hours' => '{{PLURAL:$1|1 ora|$1 ore}}',
	'timedmedia-minutes' => '{{PLURAL:$1|1 minuto|$1 minuti}}',
	'timedmedia-seconds' => '{{PLURAL:$1|1 secondo|$1 secondi}}',
	'timedmedia-reset' => 'Rexeta transcodifega',
	'timedmedia-reset-confirm' => "Resetando sta transcodifica tuti i file esistenti (se presenti) i sarà scancelà e la transcodifica la sarà de novo zontà a la coa de laoro. Ghe vorà un po' de tenpo par rifar la transcodifica. <br /><br />
Vuto 'ndar vanti?",
	'timedmedia-reset-error' => "Eror inte'l resetajo de ła transcodifega.",
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Fonte $1',
	'timedmedia-source-file-desc' => 'File orixenałe $1, $2 × $3 ($4)',
	'timedmedia-source-audio-file-desc' => 'File originale $1 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg a basa larghesa de banda (160P)',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg trasmetibiłe in streaming via Web (360P)',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg trasmetibiłe in streaming via Web (480P)',
	'timedmedia-derivative-desc-720p.ogv' => 'Video Ogg descargabiłe in alta cuałità (720P)',
	'timedmedia-derivative-desc-160p.webm' => 'WebM trasmetibiłe in streaming via Web (160P)',
	'timedmedia-derivative-desc-360p.webm' => 'WebM trasmetibiłe in streaming via Web (360P)',
	'timedmedia-derivative-desc-480p.webm' => 'WebM trasmetibiłe in streaming via Web (480P)',
	'timedmedia-derivative-desc-720p.webm' => 'WebM descargabiłe in alta cuałità (720P)',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 par dispoxitivi conpatibiłi (320P)',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 trasmetibiłe in streaming via Web (480P)',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 in cuałità HD (720P)',
	'timedmedia-subtitle-new' => 'Crear na nova tradusion o canbiar una de chełe che ghe xe xà',
	'timedmedia-subtitle-new-desc' => "Siegli la lengua e struca el boton '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Và',
	'timedmedia-subtitle-language' => '$1 ($2) sototitołi',
	'timedmedia-subtitle-no-video' => "Nó ghe xe nisun video asocià a l'atuałe pàjina de i sototitołi",
	'timedmedia-subtitle-no-subtitles' => 'Nó ghe xe al momento sototitołi in $1 par sto video, xe posibiłe [{{fullurl:{{FULLPAGENAME}}|action=edit}} canbiar sta pàjina] par xontarli',
	'timedmedia-subtitle-remote' => 'I sototitołi par sto file i se cata so $1',
	'timedmedia-subtitle-remote-link' => 'Te poi vardar ła [$1 pàjina de descrision] par sto file so $2',
	'timedmediahandler' => 'TimedMediaHandler',
	'timedmedia-videos' => '{{PLURAL:$1|$1 video}}',
	'timedmedia-ogg-videos' => '{{PLURAL:$1|$1 video Ogg}}',
	'timedmedia-webm-videos' => '{{PLURAL:$1|$1 video WebM}}',
	'timedmedia-derivative-state-transcodes' => '{{PLURAL:$1|$1 transcodifega|$1 transcodifeghe}}',
	'timedmedia-derivative-state-active' => '{{PLURAL:$1|$1 transcodifega|$1 transcodifeghe}} in execusion',
	'timedmedia-derivative-state-queued' => '{{PLURAL:$1|$1 transcodifega|$1 transcodifeghe}} in coa',
	'timedmedia-derivative-state-failed' => '{{PLURAL:$1|$1 transcodifega nó riusia|$1 transcodifeghe nó riusie}}',
	'timedmedia-file' => 'File',
	'right-transcode-reset' => 'Reinposta i video difetoxi o transcodifegai cusì che i posa esar incluxi de novo in coa de laoro.',
	'right-transcode-status' => "Vixuałixa [[Special:TimedMediaHandler|informasion so l'atuałe atività de transcodifega]]",
	'action-transcode-status' => "mostrar l'atuałe stato de ła transcodifega",
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'timedmedia-more' => 'Enamba...',
	'timedmedia-dismiss' => 'Peitta',
	'timedmedia-download' => 'Jügutoitta fail',
	'timedmedia-desc-link' => 'Informacii neciš failas',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 * @author පසිඳු කාවින්ද
 */
$messages['vi'] = array(
	'timedmedia-desc' => 'Bộ trình bày các tập tin âm thanh, video, và phụ đề hỗ trợ WebM, Ogg Theora, Vorbis, và srt',
	'timedmedia-ogg-short-audio' => 'Tập tin âm thanh Ogg $1, $2',
	'timedmedia-ogg-short-video' => 'tập tin video Ogg $1, $2',
	'timedmedia-ogg-short-general' => 'tập tin Ogg $1, $2',
	'timedmedia-ogg-long-audio' => 'tập tin âm thanh Ogg $1, dài $2, $3',
	'timedmedia-ogg-long-video' => 'tập tin video Ogg $1, dài $2, $4×$5 điểm ảnh, $3',
	'timedmedia-ogg-long-multiplexed' => 'tập tin Ogg có âm thanh và video ghép kênh, $1, dài $2, $4×$5 điểm ảnh, $3 tất cả',
	'timedmedia-ogg-long-general' => 'tập tin phương tiện Ogg, dài $2, $3',
	'timedmedia-ogg-long-error' => 'Tập tin Ogg có lỗi: $1',
	'timedmedia-webm-short-video' => 'tập tin video WebM $1, $2',
	'timedmedia-webm-long-video' => 'tập tin WebM có âm thanh và video ghép kênh, $1, dài $2, $4×$5 điểm ảnh, $3 tất cả',
	'timedmedia-flac-short-audio' => 'tập tin âm thanh FLAC, $1',
	'timedmedia-flac-long-audio' => 'tập tin âm thanh FLAC, dài $1, $2 tất cả',
	'timedmedia-wav-short-audio' => 'tập tin âm thanh WAV, $1',
	'timedmedia-wav-long-audio' => 'tập tin âm thanh WAV, dài $1, $2 tất cả',
	'timedmedia-wav-pcm-required' => 'Bạn chỉ có thể tải lên các tập tin WAV PCM (Pulse Code Modulation).',
	'timedmedia-mp4-short-video' => 'tập tin video MP4 $1, $2',
	'timedmedia-mp4-long-video' => 'tập tin âm thanh/video MP4, $1, dài $2, $4×$5 điểm ảnh, $3 tất cả',
	'timedmedia-no-player-js' => 'Rất tiếc, hoặc JavaScript bị tắt trong trình duyệt của bạn hoặc trình duyệt không có trình chơi nào được hỗ trợ.<br />
Bạn có thể <a href="$1">tải về đoạn âm hoặc đoạn video</a> hay <a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download?uselang=vi">tải về một trình chơi</a> để chơi đoạn âm hoặc đoạn video trong trình duyệt.',
	'timedmedia-more' => 'Thêm nữa…',
	'timedmedia-dismiss' => 'Đóng',
	'timedmedia-download' => 'Tải tập tin xuống',
	'timedmedia-play-media' => 'Chơi phương tiện',
	'timedmedia-desc-link' => 'Chi tiết của tập tin này',
	'timedmedia-oggThumb-version' => 'OggHandler cần oggThumb, phiên bản $1 trở lên.',
	'timedmedia-oggThumb-failed' => 'oggThumb bị thất bại trong việc tạo hình thu nhỏ.',
	'timedmedia-status-header' => 'Trạng thái chuyển mã',
	'timedmedia-update-status' => 'Cập nhật trạng thái chuyển mã',
	'timedmedia-status' => 'Trạng thái',
	'timedmedia-status-unknown' => 'Trạng thái không rõ',
	'timedmedia-transcodeinfo' => 'Miêu tả tác phẩm phái sinh được chuyển mã',
	'timedmedia-actions' => 'Tác vụ',
	'timedmedia-direct-link' => 'Tải về tác phẩm phái sinh',
	'timedmedia-not-ready' => 'Chưa sẵn',
	'timedmedia-completed-on' => 'Hoàn tất chuyển mã $1',
	'timedmedia-error-on' => 'Lỗi chuyển mã vào $1',
	'timedmedia-started-transcode' => 'Bắt đầu chuyển mã cách đây $1. $2',
	'timedmedia-percent-done' => 'Hoàn tất khoảng $1%',
	'timedmedia-in-job-queue' => 'Đã thêm vào hàng đợi việc cách đây $1',
	'timedmedia-unknown-target-size' => 'Tập tin đích có kích thước không rõ, đã chuyển mã $1',
	'timedmedia-days' => '$1 ngày',
	'timedmedia-hours' => '$1 giờ',
	'timedmedia-minutes' => '$1 phút',
	'timedmedia-seconds' => '$1 giây',
	'timedmedia-reset' => 'Đặt lại chuyển mã',
	'timedmedia-reset-confirm' => 'Việc đặt lại chuyển mã sẽ xóa tập tin nào hiện có, nếu có, và sẽ lại thêm việc chuyển mã vào hàng đợi việc. Việc chuyển mã lại sẽ mất một chút thì giờ.<br /><br />
Bạn có chắc chắn muốn tiếp tục?',
	'timedmedia-reset-error' => 'Lỗi khi đặt lại việc chuyển mã.',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => 'Tập tin $1 gốc',
	'timedmedia-source-file-desc' => 'tập tin $1 gốc, $2×$3 ($4)',
	'timedmedia-source-audio-file-desc' => 'Tập tin $1 gốc ($2)',
	'timedmedia-derivative-160p.ogv' => 'Ogg 160p',
	'timedmedia-derivative-desc-160p.ogv' => 'Video Ogg băng thông thấp (160P)',
	'timedmedia-derivative-360p.ogv' => 'Ogg 360p',
	'timedmedia-derivative-desc-360p.ogv' => 'Video Ogg có thể truyền dòng trên Web (360P)',
	'timedmedia-derivative-480p.ogv' => 'Ogg 480p',
	'timedmedia-derivative-desc-480p.ogv' => 'Video Ogg có thể truyền dòng trên Web (480P)',
	'timedmedia-derivative-720p.ogv' => 'Ogg 720p',
	'timedmedia-derivative-desc-720p.ogv' => 'Video Ogg chất lượng cao có thể tải về (720P)',
	'timedmedia-derivative-160p.webm' => 'WebM 160p',
	'timedmedia-derivative-desc-160p.webm' => 'WebM có thể truyền dòng trên Web (160P)',
	'timedmedia-derivative-360p.webm' => 'WebM 360p',
	'timedmedia-derivative-desc-360p.webm' => 'WebM có thể truyền dòng trên Web (360P)',
	'timedmedia-derivative-480p.webm' => 'WebM 480p',
	'timedmedia-derivative-desc-480p.webm' => 'WebM có thể truyền dòng trên Web (480P)',
	'timedmedia-derivative-720p.webm' => 'WebM 720p',
	'timedmedia-derivative-desc-720p.webm' => 'WebM chất lượng cao có thể tải về (720P)',
	'timedmedia-derivative-320p.mp4' => 'H.264 320p',
	'timedmedia-derivative-desc-320p.mp4' => 'MP4 thích hợp với thiết bị (320P)',
	'timedmedia-derivative-480p.mp4' => 'H.264 480p',
	'timedmedia-derivative-desc-480p.mp4' => 'MP4 có thể truyền dòng trên Web (480P)',
	'timedmedia-derivative-720p.mp4' => 'H.264 720p',
	'timedmedia-derivative-desc-720p.mp4' => 'MP4 chất lượng HD (720P)',
	'timedmedia-subtitle-new' => 'Tạo bản dịch mới hoặc sửa đổi bản dịch đã tồn tại',
	'timedmedia-subtitle-new-desc' => "Chọn ngôn ngữ và bấm nút '''{{int:Timedmedia-subtitle-new-go}}'''",
	'timedmedia-subtitle-new-go' => 'Tạo',
	'timedmedia-subtitle-language' => 'Tiểu đề $1 ($2)',
	'timedmedia-subtitle-no-video' => 'Không có video nào ứng với trang tiểu đề này',
	'timedmedia-subtitle-no-subtitles' => 'Hiện không có tiểu đề nào cho video này bằng $1. Bạn có thể [{{fullurl:{{FULLPAGENAME}}|action=edit}} sửa đổi trang này] để thêm tiểu đề.',
	'timedmedia-subtitle-remote' => 'Văn bản đồng bộ của tập tin này được cung cấp từ $1',
	'timedmedia-subtitle-remote-link' => 'Bạn có thể [$1 xem trang miêu tả] tập tin này trên $2',
	'timedmediahandler' => 'Bộ xử lý phương tiện đồng bộ',
	'timedmedia-videos' => '$1 video',
	'timedmedia-ogg-videos' => '$1 video Ogg',
	'timedmedia-webm-videos' => '$1 video WebM',
	'timedmedia-derivative-state-transcodes' => '$1 tập tin chuyển mã',
	'timedmedia-derivative-state-active' => '$1 tập tin đang chuyển mã',
	'timedmedia-derivative-state-queued' => '$1 tập tin chuyển mã trong hàng đợi',
	'timedmedia-derivative-state-failed' => '$1 tập tin chuyển mã thất bại',
	'timedmedia-file' => 'Tập tin',
	'right-transcode-reset' => 'Đặt lại các video hỏng hoặc đã chuyển mã để chèn chúng nó lại vào hàng đợi việc.',
	'right-transcode-status' => 'Xem [[Special:TimedMediaHandler|thông tin về hoạt động chuyển mã đang xảy ra]]',
	'action-transcode-status' => 'xem trạng thái chuyển mã hiện tại',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'timedmedia-more' => 'Pluikos...',
	'timedmedia-dismiss' => 'Färmükön',
	'timedmedia-download' => 'Donükön ragivi',
	'timedmedia-desc-link' => 'Tefü ragiv at',
);

/** Walloon (walon)
 */
$messages['wa'] = array(
	'timedmedia-dismiss' => 'Clôre',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'timedmedia-dismiss' => 'שליסן',
	'timedmedia-download' => 'אראָפלאָדן טעקע',
	'timedmedia-status' => 'סטאַטוס',
	'timedmedia-file' => 'טעקע',
);

/** Cantonese (粵語)
 */
$messages['yue'] = array(
	'timedmedia-desc' => 'Ogg Theora 同 Vorbis 檔案嘅處理器，加埋 JavaScript 播放器', # Fuzzy
	'timedmedia-ogg-short-audio' => 'Ogg $1 聲檔，$2',
	'timedmedia-ogg-short-video' => 'Ogg $1 畫檔，$2',
	'timedmedia-ogg-short-general' => 'Ogg $1 媒檔，$2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 聲檔，長度$2，$3',
	'timedmedia-ogg-long-video' => 'Ogg $1 畫檔，長度$2，$4×$5像素，$3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg 多工聲／畫檔，$1，長度$2，$4×$5像素，總共$3',
	'timedmedia-ogg-long-general' => 'Ogg 媒檔，長度$2，$3',
	'timedmedia-ogg-long-error' => '無效嘅ogg檔: $1',
	'timedmedia-more' => '更多...',
	'timedmedia-dismiss' => '閂',
	'timedmedia-download' => '下載檔案',
	'timedmedia-desc-link' => '關於呢個檔案',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Byfserag
 * @author Gaoxuewei
 * @author Hzy980512
 * @author Liangent
 * @author Shizhao
 * @author Yfdyh000
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'timedmedia-desc' => '音频、视频和字幕的处理程序，支持WebM，Ogg Theora、Vorbis，srt格式',
	'timedmedia-ogg-short-audio' => 'Ogg $1声音文件，$2',
	'timedmedia-ogg-short-video' => 'Ogg $1视频文件，$2',
	'timedmedia-ogg-short-general' => 'Ogg $1媒体文件，$2',
	'timedmedia-ogg-long-audio' => 'Ogg $1声音文件，长度$2，$3',
	'timedmedia-ogg-long-video' => 'Ogg $1视频文件，长度$2，$4 × $5像素，$3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg多工声音/视频文件，$1，长度$2，$4 × $5像素，共$3',
	'timedmedia-ogg-long-general' => 'Ogg媒体文件，长度$2，$3',
	'timedmedia-ogg-long-error' => '无效的ogg文件：$1',
	'timedmedia-webm-short-video' => 'WebM $1视频文件，$2',
	'timedmedia-webm-long-video' => 'WebM音频/视频文件，$1，长度$2，$4 × $5像素，共$3',
	'timedmedia-flac-short-audio' => 'FLAC音频文件，$1',
	'timedmedia-flac-long-audio' => 'FLAC音频文件，总共长$1，码率$2',
	'timedmedia-wav-short-audio' => 'WAV音频文件，$1',
	'timedmedia-wav-long-audio' => 'WAV音频文件，总共长$1，码率$2',
	'timedmedia-wav-pcm-required' => '您只能上传脉冲编码调制（PCM）WAV。',
	'timedmedia-mp4-short-video' => 'MP4 $1视频文件，$2',
	'timedmedia-mp4-long-video' => 'MP4音频/视频文件，$1，长度$2，$4 × $5像素，$3 overall',
	'timedmedia-no-player-js' => '抱歉，您的浏览器禁用了JavaScript或没有任何可支持的播放器。<br />
您可以<a href="$1">下载这个片段</a>或<a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">下载一个播放器</a>以在浏览器中播放片段。',
	'timedmedia-more' => '更多...',
	'timedmedia-dismiss' => '关闭',
	'timedmedia-download' => '下载文件',
	'timedmedia-play-media' => '播放媒体',
	'timedmedia-desc-link' => '关于该文件',
	'timedmedia-oggThumb-version' => 'OggHandler需要oggThumb $1或者之后的版本。',
	'timedmedia-oggThumb-failed' => 'oggThumb未能创建缩略图。',
	'timedmedia-status-header' => '转码状态',
	'timedmedia-update-status' => '更新转码状态',
	'timedmedia-status' => '状态',
	'timedmedia-status-unknown' => '未知状态',
	'timedmedia-transcodeinfo' => '转码衍生作品描述',
	'timedmedia-actions' => '操作',
	'timedmedia-direct-link' => '下载衍生作品',
	'timedmedia-not-ready' => '未就绪',
	'timedmedia-completed-on' => '已完成转码$1',
	'timedmedia-error-on' => '于$1转码错误',
	'timedmedia-started-transcode' => '于$1前开始转码。$2',
	'timedmedia-percent-done' => '大约$1%已完成',
	'timedmedia-in-job-queue' => '添加到工作队列在$1前',
	'timedmedia-unknown-target-size' => '未知目标大小，$1已编码',
	'timedmedia-days' => '$1天',
	'timedmedia-hours' => '$1小时',
	'timedmedia-minutes' => '$1分',
	'timedmedia-seconds' => '$1秒',
	'timedmedia-reset' => '重置转码',
	'timedmedia-reset-confirm' => '重置转码将会尽可能移除所有现有文件，并将其重新加入到转码工作队列。这将需要一些时间来重新转码。<br /><br />
您确定要继续吗？',
	'timedmedia-reset-error' => '重置转码工作时发生错误。',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1原始文件',
	'timedmedia-source-file-desc' => '$1原始文件，$2 × $3（$4）',
	'timedmedia-source-audio-file-desc' => '原始$1文件 ($2)',
	'timedmedia-derivative-desc-160p.ogv' => '低带宽Ogg视频（160P）',
	'timedmedia-derivative-desc-360p.ogv' => 'Web流媒体Ogg视频（360P）',
	'timedmedia-derivative-desc-480p.ogv' => 'Web流媒体Ogg视频（480P）',
	'timedmedia-derivative-desc-720p.ogv' => '高清可下载Ogg视频（720P）',
	'timedmedia-derivative-desc-160p.webm' => 'Web流媒体WebM（160P）',
	'timedmedia-derivative-desc-360p.webm' => 'Web流媒体WebM（360P）',
	'timedmedia-derivative-desc-480p.webm' => 'Web流媒体WebM（480P）',
	'timedmedia-derivative-desc-720p.webm' => '高清可下载WebM视频（720P）',
	'timedmedia-derivative-desc-320p.mp4' => '设备友好MP4 (320P)',
	'timedmedia-derivative-desc-480p.mp4' => '网页流媒体MP4 (480P)',
	'timedmedia-derivative-desc-720p.mp4' => '高清MP4 (720P)',
	'timedmedia-derivative-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-desc-ogg' => 'Ogg Vorbis',
	'timedmedia-derivative-desc-mp3' => 'MP3',
	'timedmedia-subtitle-new' => '创建新翻译或编辑现有翻译',
	'timedmedia-subtitle-new-desc' => "选择语言然后按'''{{int:Timedmedia-subtitle-new-go}}'''按钮",
	'timedmedia-subtitle-new-go' => '提交',
	'timedmedia-subtitle-language' => '$1（$2）字幕',
	'timedmedia-subtitle-no-video' => '当前字幕页面没有关联的视频',
	'timedmedia-subtitle-no-subtitles' => '当前没有这个视频的$1字幕，您可以[{{fullurl:{{FULLPAGENAME}}|action=edit}} 编辑这个页面]以添加',
	'timedmedia-subtitle-remote' => '本文件的字幕文件位于$1',
	'timedmedia-subtitle-remote-link' => '你可以在$2查看[$1 该文件的描述页]',
	'timedmediahandler' => '定时媒体处理程序',
	'timedmedia-videos' => '$1个视频',
	'timedmedia-ogg-videos' => '$1个Ogg视频',
	'timedmedia-webm-videos' => '$1个WebM视频',
	'timedmedia-derivative-state-transcodes' => '$1次转码',
	'timedmedia-derivative-state-active' => '$1个正在运行的转码任务',
	'timedmedia-derivative-state-queued' => '$1个队列中的转码任务',
	'timedmedia-derivative-state-failed' => '$1次转码失败',
	'timedmedia-file' => '文件',
	'right-transcode-reset' => '重置已失败或已转码的视频将其再次加入到作业队列中。',
	'right-transcode-status' => '查看[[Special:TimedMediaHandler|当前转码活动的信息]]',
	'action-transcode-status' => '查看当前的转码状态',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Gaoxuewei
 * @author Justincheng12345
 * @author Liuxinyu970226
 * @author Mark85296341
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'timedmedia-desc' => '帶有WebM，Ogg Theora、Vorbis，srt格式支持的音頻、視頻和同步文本處理器',
	'timedmedia-ogg-short-audio' => 'Ogg $1 聲音檔案，$2',
	'timedmedia-ogg-short-video' => 'Ogg $1 影片檔案，$2',
	'timedmedia-ogg-short-general' => 'Ogg $1 媒體檔案，$2',
	'timedmedia-ogg-long-audio' => 'Ogg $1 聲音檔案，長度 $2，$3',
	'timedmedia-ogg-long-video' => 'Ogg $1 影片檔案，長度 $2，$4 × $5像素，$3',
	'timedmedia-ogg-long-multiplexed' => 'Ogg 多工聲音／影片檔案，$1，長度 $2，$4 × $5 像素，共 $3',
	'timedmedia-ogg-long-general' => 'Ogg 媒體檔案，長度 $2，$3',
	'timedmedia-ogg-long-error' => '無效的ogg檔案：$1',
	'timedmedia-webm-short-video' => 'WebM $1視頻文件，$2',
	'timedmedia-webm-long-video' => 'WebM音頻/視頻文件，$1，長度$2，$4 × $5像素，共$3',
	'timedmedia-flac-short-audio' => 'FLAC音頻檔案，$1',
	'timedmedia-flac-long-audio' => 'FLAC音頻檔案，長$1，寬$2',
	'timedmedia-wav-short-audio' => 'WAV音頻檔案，$1',
	'timedmedia-wav-long-audio' => 'WAV音頻檔案，長$1，寬$2',
	'timedmedia-mp4-short-video' => 'MP4 $1視訊檔案，$2',
	'timedmedia-mp4-long-video' => 'MP4音訊/視訊檔案，$1，長度$2，$4×$5像素，共$3',
	'timedmedia-no-player-js' => '抱歉，您的瀏覽器的JavaScript已關閉或沒有可以支持的播放器。<br />
您可以<a href="$1">下載這個片段</a>或<a href="//www.mediawiki.org/wiki/Extension:TimedMediaHandler/Client_download">下載一個播放器</a>以在瀏覽器中播放片段。',
	'timedmedia-more' => '更多...',
	'timedmedia-dismiss' => '關閉',
	'timedmedia-download' => '下載檔案',
	'timedmedia-play-media' => '播放媒體',
	'timedmedia-desc-link' => '關於這個檔案',
	'timedmedia-oggThumb-version' => 'OggHandler需要oggThumb $1或者之後的版本。',
	'timedmedia-oggThumb-failed' => 'oggThumb未能創建縮略圖。',
	'timedmedia-status-header' => '轉碼狀態',
	'timedmedia-update-status' => '更新轉碼狀態',
	'timedmedia-status' => '狀態',
	'timedmedia-status-unknown' => '未知狀態',
	'timedmedia-transcodeinfo' => '轉碼衍生作品描述',
	'timedmedia-actions' => '動作',
	'timedmedia-direct-link' => '下載衍生作品',
	'timedmedia-not-ready' => '未就緒',
	'timedmedia-completed-on' => '已完成轉碼$1',
	'timedmedia-error-on' => '於$1轉碼時出錯。',
	'timedmedia-started-transcode' => '於$1前開始轉碼。$2',
	'timedmedia-percent-done' => '大約$1%已完成',
	'timedmedia-in-job-queue' => '$1前添加到工作隊列',
	'timedmedia-unknown-target-size' => '未知目標大小，$1已編碼',
	'timedmedia-days' => '$1天',
	'timedmedia-hours' => '$1小時',
	'timedmedia-minutes' => '$1分',
	'timedmedia-seconds' => '$1秒',
	'timedmedia-reset' => '重置轉碼',
	'timedmedia-reset-confirm' => '重置轉碼會移除所有現有文件，並將其重新加入轉碼工作隊列。可能需要一些時間來重新轉碼。<br /><br />
您確實想繼續嗎？',
	'timedmedia-reset-error' => '重置轉碼工作時發生錯誤。',
	'timedmedia-mp4' => 'MP4',
	'timedmedia-source-file' => '$1原始文件',
	'timedmedia-source-file-desc' => '$1原始文件，$2 × $3（$4）',
	'timedmedia-source-audio-file-desc' => '原始檔 $1  ( $2 )',
	'timedmedia-derivative-desc-160p.ogv' => '低帶寬Ogg視頻（160P）',
	'timedmedia-derivative-desc-360p.ogv' => 'Web流Ogg視頻（360P）',
	'timedmedia-derivative-desc-480p.ogv' => 'Web流Ogg視頻（480P）',
	'timedmedia-derivative-desc-720p.ogv' => '高質量可下載Ogg視頻（720P）',
	'timedmedia-derivative-desc-160p.webm' => 'Web流WebM（160P）',
	'timedmedia-derivative-desc-360p.webm' => 'Web流WebM（360P）',
	'timedmedia-derivative-desc-480p.webm' => 'Web流WebM（480P）',
	'timedmedia-derivative-desc-720p.webm' => '高質量可下載WebM視頻（720P）',
	'timedmedia-derivative-desc-320p.mp4' => '設備友好MP4（320P）',
	'timedmedia-derivative-desc-480p.mp4' => '網頁流媒體MP4（480P）',
	'timedmedia-derivative-desc-720p.mp4' => '高清MP4（720P）',
	'timedmedia-subtitle-new' => '創建新翻譯或編輯現有翻譯',
	'timedmedia-subtitle-new-desc' => "選擇語言後'''{{int:Timedmedia-subtitle-new-go}}'''按鈕",
	'timedmedia-subtitle-new-go' => '提交',
	'timedmedia-subtitle-language' => '$1（$2）字幕',
	'timedmedia-subtitle-no-video' => '當前字幕頁面沒有關聯的視頻',
	'timedmedia-subtitle-no-subtitles' => '當前沒有這個視頻的$1字幕，您可以[{{fullurl:{{FULLPAGENAME}}|action=edit}} 編輯這個頁面]以添加',
	'timedmedia-subtitle-remote' => '本檔案的字幕位於$1',
	'timedmedia-subtitle-remote-link' => '您可於$2查看[$1 該檔案的描述頁]',
	'timedmediahandler' => '定時媒體處理器',
	'timedmedia-videos' => '$1個視頻',
	'timedmedia-ogg-videos' => '$1個Ogg視頻',
	'timedmedia-webm-videos' => '$1個WebM視頻',
	'timedmedia-derivative-state-transcodes' => '$1次轉碼',
	'timedmedia-derivative-state-active' => '$1個正在運行的轉碼任務',
	'timedmedia-derivative-state-queued' => '$1個隊列中的轉碼任務',
	'timedmedia-derivative-state-failed' => '$1次轉碼失敗',
	'timedmedia-file' => '檔案',
	'right-transcode-reset' => '重設失敗或轉碼視頻以將其再插入作業佇列中。',
	'right-transcode-status' => '查看[[Special:TimedMediaHandler|當前轉碼活動的資訊]]',
	'action-transcode-status' => '查看當前轉碼狀態',
);
