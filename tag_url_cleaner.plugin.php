<?php
class TagURLCleaner extends Plugin
{
	public function filter_rewrite_rules( $rules )
	{
		foreach( $rules as $rule ) {
			if( $rule->name == 'display_entries_by_tag' ) {
				$rule->parse_regex = '#^(?P<tag>[^/]+)(?:/page/(?P<page>\d+))?/?$#i';
				$rule->build_str = '{$tag}(/page/{$page})';
				return $rules;
			}
		}
		return $rules;
	}
}
?>
