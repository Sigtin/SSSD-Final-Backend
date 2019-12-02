<?php
    class Card {
        private $name;
        private $imageUrl;
        private $oracleText;
        private $manaCost;
        private $colorIdentity;
        private $type;

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_imageUrl($imageUrl) {
            $this->imageUrl = $imageUrl;
        }

        function get_imageUrl() {
            return $this->imageUrl;
        }

        function set_oracleText($oracleText) {
            $this->oracleText = $oracleText;
        }

        function get_oracleText() {
            return $this->oracleText;
        }

        function set_manaCost($manaCost) {
            $this->manaCost = $manaCost;
        }

        function get_manaCost() {
            return $this->manaCost;
        }

        function set_colorIdentity($colorIdentity) {
            $this->colorIdentity = $colorIdentity;
        }

        function get_colorIdentity() {
            return $this->colorIdentity;
        }

        function set_type($type) {
            $this->type = $type;
        }

        function get_type() {
            return $this->type;
        }
    }
?>