const { src, dest, parallel, watch } = require( 'gulp' );
const babel = require( 'gulp-babel' );
const prefix = require( 'gulp-autoprefixer' );
const terser = require( 'gulp-terser' );
const minify = require( 'gulp-clean-css' );
const rename = require( 'gulp-rename' );
const sass = require( 'gulp-sass' )( require( 'sass' ) );

function js() {
	return src( 'src/js/*.js' )
		.pipe( babel() )
		.pipe( terser() )
		.pipe( rename( { extname: '.min.js' } ) )
		.pipe( dest( 'assets/' ) );
}

function css() {
	return src( 'src/scss/**/*.scss' )
		.pipe( sass() )
		.pipe( prefix() )
		.pipe( minify() )
		.pipe( rename( { extname: '.min.css' } ) )
		.pipe( dest( 'assets/' ) );
}

exports.js = js;
exports.css = css;
exports.watch = function() {
	watch( 'src/js/*.js', js );
	watch( 'src/scss/**/*.scss', css );
};
exports.default = parallel( js, css );
