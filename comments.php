<?php
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die ( 'Please do not load this page directly. Thanks!' );

if ( post_password_required() ) {
	printf( '<p class="alert">%s</p>', __( 'This post is password protected. Enter the password to view comments.', 'tally_taxdomain' ) );
	return;
}

do_action( 'tally_before_comments' );
do_action( 'tally_comments' );
do_action( 'tally_after_comments' );

do_action( 'tally_before_pings' );
do_action( 'tally_pings' );
do_action( 'tally_after_pings' );

do_action( 'tally_before_comment_form' );
do_action( 'tally_comment_form' );
do_action( 'tally_after_comment_form' );