<?php
/**
 * Created by PhpStorm.
 * User: n00002621
 * Date: 5/28/15
 * Time: 10:03 AM
 */

class Substance extends AppModel {

    public $hasMany=['Identifier'];

    public $hasAndBelongsToMany = ['System'];

}