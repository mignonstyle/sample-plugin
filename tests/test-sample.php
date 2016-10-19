<?php
/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

class SampleTest extends WP_UnitTestCase {
	/**
	 *
	 */
	public function test_language_japanese() {
		// ショートコードを実行して結果を取得
		$greeting = do_shortcode( '[greeting language="japanese"]' );

		// アサーションメソッドを実行して期待した結果かどうかチェック
		// ここでは $greeting が こんにちは ならOK
		$this->assertEquals( 'こんにちは', $greeting );
	}

	/**
	 *
	 */
	public function test_language_english() {
		// ショートコードを実行して結果を取得
		$greeting = do_shortcode( '[greeting language="english"]' );

		// アサーションメソッドを実行して期待した結果かどうかチェック
		// ここでは $greeting が hello ならOK
		$this->assertEquals( 'hello', $greeting );
	}
}
