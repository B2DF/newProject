<?php

    class ViewsLinker{

        public static function viewLinkModel($linksModel){

            if( $linksModel == "aboutMe" ||
                $linksModel == "jobExperience" ||
                $linksModel == "skills" ||
                $linksModel == "education" ||
                $linksModel == "hobbies") {

                    $module = "views/modules/".$linksModel.".php";
                };


            return $module;
        }

    }

?>