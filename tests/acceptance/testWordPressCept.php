<?php

$I = new AcceptanceTester( $scenario );

$I->wantTo( 'Test that WordPress works.' );

$I->amOnUrl( 'https://wordpress.org' );

$I->fillField( 'search', 'henty' );
$I->click( 'Submit' );
$I->seeCurrentURLEquals( '/search/henty' );
$I->waitForText( 'Steve Henty – @stevehenty | WordPress.org' );
$I->click( [ 'link' => 'Steve Henty – @stevehenty | WordPress.org' ] );
$I->seeCurrentURLEquals( '/stevehenty/' );
$I->see( 'WordCamp Speaker' );