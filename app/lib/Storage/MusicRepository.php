<?php
namespace Storage;

interface MusicRepository {
	 
	public function findArtist($artistName);
	public function findAlbums($artistId);
	public function findTracks($trackId);
	public function getTopTen();
	public function getArtist($artistId);
	public function isArtistInMSDB($artistId);
	public function getAlbum($albumId);
	public function isAlbumInMSDB($artistMBID, $release);
	public function getTrack($trackId);
	public function isTrackInMSDB($artistMBID, $track_name);
	public function getMSDBSong($artistMBID, $track_name);
}