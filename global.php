<?php
require 'flourish/fLoader.php';
require 'sutra/sLoader.php';
require 'sutra/functions/all.php';
require 'kusaba/classes/kLoader.php';
require 'moor/Moor.php';
require 'htmlpurifier/HTMLPurifier.includes.php';
require 'recaptcha/recaptcha.php';
//require 'CssMin.php';
//require 'Mollom.php';

// Convenience constants for fActiveRecord::build, sCRUDForm, etc
const Article     = 'Article';
const Board       = 'Board';
const BoardRule   = 'BoardRule';
const Category    = 'Category';
const FAQ         = 'FAQ';
const File        = 'File';
const ImageFile   = 'ImageFile';
const Reply       = 'Reply';
const SiteSetting = 'SiteSetting';
const Thread      = 'Thread';
const User        = 'User';

kLoader::best();
