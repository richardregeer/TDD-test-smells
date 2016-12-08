'use strict';

const gulp = require('gulp-help')(require('gulp'));
const loadPlugins = require('gulp-load-plugins');

const {shell} = loadPlugins();

const PHPUNIT_BIN = 'vendor/bin/phpunit-randomizer --order rand';
const PHPUNIT_BIN_SERIAL = 'vendor/bin/phpunit';

gulp.task(
  'erratic:interating-smell:random',
  'Run the erratic interacting smell example tests in random order.',
  shell.task(`${PHPUNIT_BIN} --filter InteractingSmellTest --testdox`)
);

gulp.task(
  'erratic:interating-smell:serial',
  'Run the erratic interacting smell example tests in serial.',
  shell.task(`${PHPUNIT_BIN_SERIAL} --filter InteractingSmellTest --testdox`)
);

gulp.task(
  'erratic:interating-smell:solution',
  'Run the erratic interacting smell solution example tests.',
  shell.task(`${PHPUNIT_BIN} --filter InteractingSmellSolutionTest --testdox`)
);

gulp.task(
  'erratic:lonely-smell:serial',
  'Run the erratic lonely smell example tests in serial.',
  shell.task(`${PHPUNIT_BIN_SERIAL} --filter LonelySmellTest --testdox`)
);

gulp.task(
  'erratic:lonely-smell:random',
  'Run the erratic lonely smell example tests in random order.',
  shell.task(`${PHPUNIT_BIN} --filter LonelySmellTest --testdox`)
);

gulp.task(
  'erratic:lonely-smell:single-test',
  'Run the single test case that has a dependency.',
  shell.task(`${PHPUNIT_BIN} --filter testConstructCustomerOnlyWithContactInformation --testdox`)
);

gulp.task(
  'erratic:lonely-smell:solution',
  'Run the erratic lonely smell solution example tests.',
  shell.task(`${PHPUNIT_BIN} --filter LonelySmellSolutionTest --testdox`)
);
