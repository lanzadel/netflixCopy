<?php

class SeasonProvider {

    private $con, $username;

    public function __construct($con, $username) {
        $this->con = $con;
        $this->username = $username;
    }

    public function create($entity) {
        $seasons = $entity->getSeasons();

        if(sizeof($seasons) == 0) {
            return;
        }
        $seasonsHtml = "";
        foreach ($seasons as $season) {
            $seasonNumber =  $season->getSeasonNumber();

            $videosHtml = "";
            foreach ($season->getVideos() as $video) {
                $videosHtml .= $this->getVideoSquare($video);
            }

            $seasonsHtml .= "<div class='season'>
                                <h3>Season $seasonNumber</h3>
                                <div class='videos'>
                                    $videosHtml;
                                </div>
                            </div>";
        }
        return $seasonsHtml;
    }

    public function getVideoSquare($video) {
        $id = $video->getId();
        $thumbnail = $video->getThumbnail();
        $title= $video->getTitle();
        $description = $video->getDescription();
        $episodeNumber = $video->getEpisodeNumber();

        return "<a href='watch.php?id=$id'>
                    <div class='episodeContainer'>
                        <div class='contents'>
                            <img src='$thumbnail' />
                            <div class='videoInfo'>
                                <h4>$episodeNumber . $title</h4>
                                <span>$description</span>
                            </div>        
                        </div>        
                    </div>
                </a>";
    }

}