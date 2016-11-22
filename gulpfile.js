'use strict';

const gulp = require('gulp-help')(require('gulp'));
const requireDir = require('require-dir');

requireDir('./tasks', {recurse: true});
