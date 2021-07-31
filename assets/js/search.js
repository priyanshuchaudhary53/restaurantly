class Search {

	constructor() {

		this.addSearchHTML();
		this.openButton = $('.search-open-btn');
		this.closeButton = $('.search-close-btn');
		this.searchOverlay = $('.search-overlay');
		this.searchInput = $('#search-form');
		this.resultDiv = $('.search-result');
		this.typingTimer;
		this.previousValue;
		this.isSpinnerVisible = false;
		this.events();

	}

	events() {

		this.openButton.on('click', this.openOverlay.bind(this));
		this.closeButton.on('click', this.closeOverlay.bind(this));
		this.searchInput.on('keyup', this.typingLogic.bind(this));

	}

	openOverlay() {

		this.searchOverlay.addClass('search-overlay--active');
		$('body').addClass('no-scroll');
		setTimeout(() => this.searchInput.focus(), 1000);
		

	}

	closeOverlay() {

		this.searchOverlay.removeClass('search-overlay--active');
		$('body').removeClass('no-scroll');
		this.searchInput.val('');

	}

	typingLogic() {

		if (this.searchInput.val() != this.previousValue) {
			clearTimeout(this.typingTimer);
			if (this.searchInput.val()) {
				if (!this.isSpinnerVisible) {
				this.resultDiv.html('<div class="lds-ring"><div></div><div></div><div></div><div></div></div>');
				this.isSpinnerVisible = true;
				}
				this.typingTimer = setTimeout(this.getResults.bind(this), 750);
			}
			else  {
				this.resultDiv.html('');
				this.isSpinnerVisible = false;
			}
			
		}
		this.previousValue = this.searchInput.val();
	
	}

	getResults() {

		$.when(
			$.getJSON(restaurantly_data.root_url + '/wp-json/wp/v2/posts?search=' + this.searchInput.val()), 
			$.getJSON(restaurantly_data.root_url + '/wp-json/wp/v2/pages?search=' + this.searchInput.val())
		).then((posts, pages) => {
			var combinedArray = posts[0].concat(pages[0]);
				this.resultDiv.html(`
					<h2>Search result(s):</h2>
					${combinedArray.length ? '<ul>' : '<p>No post/page found!</p>'}
						${combinedArray.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
					${combinedArray.length ? '</ul>' : ''}
				`);
				this.isSpinnerVisible = false;
		}, () => {
			this.resultDiv.html('<p>Unexpected error, Please try again...</p>');
		});

	}

	addSearchHTML() {

		$('body').append(
			`<div class="search-overlay">

			    <div class="close-btn-container">
			      <a href="javascript: void(0)" class="search-close-btn"><i class="bi bi-x" style="font-size: 2rem; color: #fff; cursor: pointer;"></i></a>
			    </div>
			    <div class="container search-form-container">
			      <input type="text" name="search-form" id="search-form" placeholder="Search">
			    </div>
			    <div class="container search-result"></div>
		    
		  </div>`
		);

	}

}

var SearchForm = new Search();