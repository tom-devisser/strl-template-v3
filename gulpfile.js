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

function foundation() {
	return src( [
		'src/js/foundation/foundation.core.js',
		'src/js/foundation/foundation.util.*.js',
		'src/js/foundation/foundation.tabs.js',
		'src/js/foundation/*.js',
	] )
		.pipe( concat( 'foundation.min.js' ) )
		.pipe( babel( { compact: false } ) )
		.pipe( terser() )
		.pipe( dest( 'assets/' ) );
}

function vendor() {
	return src( 'src/js/vendor/*.js' )
		.pipe( babel() )
		.pipe( terser() )
		.pipe( rename( 'vendor.min.js' ) )
		.pipe( dest( 'assets/' ) );
}

exports.css = css;
exports.js = js;
exports.foundation = foundation;
exports.vendor = vendor;
exports.watch = function() {
	watch( 'src/js/*.js', js );
	watch( 'src/scss/**/*.scss', css );
};
exports.default = parallel( vendor, foundation, js, css );
