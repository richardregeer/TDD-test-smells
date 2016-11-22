'use strict';

const gulp = require('gulp-help')(require('gulp'));
const loadPlugins = require('gulp-load-plugins');

const {shell} = loadPlugins();

const ALL_FILES = '**';
const PHPUNIT_BIN = 'vendor/bin/phpunit-randomizer --order rand';
const SOURCE_PATH = 'src';
const TESTS_PATH = 'tests';

gulp.task(
  'test:erratic:interating-smell',
  'Run the erratic interacting example tests.',
  shell.task(`${PHPUNIT_BIN}`)
);
