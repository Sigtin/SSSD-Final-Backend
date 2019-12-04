<?php
    class Card {
        private $id;
        private $name;
        private $imageUrl;
        
        function set_id($id) {
            $this->id = $id;
        }

        function get_id() {
            return $this->id;
        }

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
    }

    class MTG_Card extends Card {
        private $oracleText;
        private $manaCost;
        private $colorIdentity;
        private $type;

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

    class Pokemon_Card extends Card {
        private $attacks;
        private $hp;
        private $types;
        private $weaknesses;

        function set_attacks($attacks) {
            $this->attacks = $attacks
        }

        function get_attacks() {
            return $this->attacks;
        }

        function set_hp($hp) {
            $this->hp = $hp;
        }

        function get_hp() {
            return $this->hp;
        }

        function set_types($types) {
            $this->types = $types;
        }

        function get_types() {
            return $this->types;
        }

        function set_weaknesses($weaknesses) {
            $this->weaknesses = $weaknesses;
        }

        function get_weaknesses() {
            return $this->weaknesses;
        }
    }

    class Yugioh_Card extends Card {
        private $type;
        private $atk;
        private $def;
        private $description;

        function set_type($type) {
            $this->type = $type;
        }

        function get_type() {
            return $this->type;
        }

        function set_atk($atk) {
            $this->atk = $atk;
        }

        function get_atk() {
            return $this->atk;
        }

        function set_def($def) {
            $this->def = $def;
        }

        function get_def() {
            return $this->def;
        }

        function set_description($description) {
            $this->description = $description;
        }

        function get_description() {
            return $this->description;
        }
    }
?>