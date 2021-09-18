const { src, dest, parallel, watch } = require( 'gulp' );
const concat = require( 'gulp-concat' );
const babel = require( 'gulp-babel' );
const prefix = require( 'gulp-autoprefixer' );
const terser = require( 'gulp-terser' );
const minify = require( 'gulp-clean-css' );
const sass = require( 'gulp-sass' )( require( 'sass' ) );
const rename = require( 'gulp-rename' );

function js() {
	return src( 'src/js/*.js' )
		.pipe( concat( 'scripts.min.js' ) )
		.pipe( babel() )
		.pipe( terser() )
		.pipe( dest( 'assets/' ) );
}

function css() {
	return src( 'src/scss/styles.scss' )
		.pipe( sass() )
		.pipe( prefix() )
		.pipe( minify() )
		.pipe( rename( 'styles.min.css' ) )
		.pipe( dest( 'assets/' ) );
}

exports.js = js;
exports.css = css;
exports.watch = function() {
	watch( 'src/js/*.js', js );
	watch( 'src/scss/**/*.scss', css );
};
exports.default = parallel( js, css );
