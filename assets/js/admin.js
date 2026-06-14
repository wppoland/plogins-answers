/**
 * Answers — admin repeater (progressive, dependency-free).
 *
 * "Add question" clones a hidden <template> row, re-indexes the field names so
 * each row posts as its own array entry, and enables the cloned inputs
 * (template inputs are disabled so they never post). "Remove" deletes a row.
 *
 * Loaded with `defer`. With JS disabled, existing rows remain editable and all
 * settings still save.
 */
( function () {
	'use strict';

	function reindex( repeater ) {
		var rows = repeater.querySelectorAll(
			'[data-answers-rows] > [data-answers-row]'
		);
		rows.forEach( function ( row, index ) {
			row.querySelectorAll( '[name]' ).forEach( function ( field ) {
				field.name = field.name.replace(
					/\[(?:\d+|__INDEX__)\]/,
					'[' + index + ']'
				);
			} );
		} );
	}

	function enableRow( row ) {
		row.querySelectorAll( '[disabled]' ).forEach( function ( field ) {
			field.disabled = false;
		} );
	}

	function addRow( repeater ) {
		var template = repeater.querySelector( '[data-answers-template]' );
		var rows = repeater.querySelector( '[data-answers-rows]' );

		if ( ! template || ! rows ) {
			return;
		}

		var fragment = template.content.cloneNode( true );
		rows.appendChild( fragment );

		var added = rows.lastElementChild;
		if ( added ) {
			enableRow( added );
			reindex( repeater );
			var firstInput = added.querySelector( 'input, textarea' );
			if ( firstInput ) {
				firstInput.focus();
			}
		}
	}

	function initRepeater( repeater ) {
		repeater.addEventListener( 'click', function ( event ) {
			if ( event.target.closest( '[data-answers-add]' ) ) {
				event.preventDefault();
				addRow( repeater );
				return;
			}

			var remove = event.target.closest( '[data-answers-remove]' );
			if ( remove ) {
				event.preventDefault();
				var row = remove.closest( '[data-answers-row]' );
				if ( row ) {
					row.remove();
					reindex( repeater );
				}
			}
		} );
	}

	document
		.querySelectorAll( '[data-answers-repeater]' )
		.forEach( initRepeater );
} )();
