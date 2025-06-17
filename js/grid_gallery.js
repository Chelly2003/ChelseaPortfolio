;(function(window) {

    'use strict';

    function CBPGridGallery(el) {
        this.el = el;
        this.grid = this.el.querySelector('.grid');
        this.gridItems = [].slice.call(this.grid.querySelectorAll('.grid__item'));
        this.slideshow = this.el.querySelector('.slideshow');
        this.slideshowItems = [].slice.call(this.slideshow.querySelectorAll('.slideshow__item'));
        this.slideshowClose = this.slideshow.querySelector('.slideshow__close');
        this.slideshowNav = this.slideshow.querySelector('.slideshow__nav');
        this.slideshowNavNext = this.slideshowNav.querySelector('.slideshow__nav-item--next');
        this.slideshowNavPrev = this.slideshowNav.querySelector('.slideshow__nav-item--prev');
        this.isSlideshowVisible = false;
        this.current = -1;
        this.prevItem = null;
        this.transEndEventNames = {
            'WebkitTransition': 'webkitTransitionEnd',
            'MozTransition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'msTransition': 'MSTransitionEnd',
            'transition': 'transitionend'
        };
        this.transEndEventName = this.transEndEventNames[Modernizr.prefixed('transition')];
        this.supportTransitions = Modernizr.csstransitions;
        this.scrollPosition = null;

        this._initEvents();
        this._initMasonry();
    }

    CBPGridGallery.prototype._initEvents = function() {
        var self = this;

        // Grid items click event
        this.gridItems.forEach(function(item, idx) {
            item.addEventListener('click', function(ev) {
                ev.preventDefault();
                self._showSlideshow(idx);
            });
        });

        // Close slideshow event
        this.slideshowClose.addEventListener('click', function() {
            self._hideSlideshow();
        });

        // Next slide event
        this.slideshowNavNext.addEventListener('click', function() {
            self._navigate('next');
        });

        // Prev slide event
        this.slideshowNavPrev.addEventListener('click', function() {
            self._navigate('prev');
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(ev) {
            if (!self.isSlideshowVisible) return;
            if (ev.key === 'ArrowRight' || ev.keyCode === 39) {
                self._navigate('next');
            } else if (ev.key === 'ArrowLeft' || ev.keyCode === 37) {
                self._navigate('prev');
            } else if (ev.key === 'Escape' || ev.keyCode === 27) {
                self._hideSlideshow();
            }
        });

        // Scroll prevention when slideshow visible
        window.addEventListener('scroll', function() {
            if (self.isSlideshowVisible) {
                window.scrollTo(self.scrollPosition ? self.scrollPosition.x : 0, self.scrollPosition ? self.scrollPosition.y : 0);
            } else {
                var docElem = document.documentElement;
                self.scrollPosition = {
                    x: window.pageXOffset || docElem.scrollLeft,
                    y: window.pageYOffset || docElem.scrollTop
                };
            }
        });

        // Resize event
        window.addEventListener('resize', function() {
            self._resize();
        });
    };

    CBPGridGallery.prototype._initMasonry = function() {
        var self = this;
        imagesLoaded(this.grid, function() {
            new Masonry(self.grid, {
                itemSelector: '.grid__item',
                isFitWidth: true,
                gutter: 20
            });
        });
    };

    CBPGridGallery.prototype._showSlideshow = function(idx) {
        this.isSlideshowVisible = true;
        this.current = idx;
        this.slideshow.classList.add('slideshow--open');
        this._showItem(idx);
        document.body.classList.add('no-scroll');
    };

    CBPGridGallery.prototype._hideSlideshow = function() {
        this.isSlideshowVisible = false;
        this.slideshow.classList.remove('slideshow--open');

        if (this.prevItem) {
            this.prevItem.classList.remove('slideshow__item--current');
            this.prevItem.classList.remove('slideshow__item--prev');
            this.prevItem.classList.remove('slideshow__item--next');
            this.prevItem = null;
        }
        this.current = -1;
        document.body.classList.remove('no-scroll');
    };

    CBPGridGallery.prototype._showItem = function(idx) {
        if (this.prevItem) {
            this.prevItem.classList.remove('slideshow__item--current');
            this.prevItem.classList.remove('slideshow__item--prev');
            this.prevItem.classList.remove('slideshow__item--next');
        }

        this.current = idx;

        var currentItem = this.slideshowItems[this.current];
        var prevIdx = (this.current - 1 + this.slideshowItems.length) % this.slideshowItems.length;
        var nextIdx = (this.current + 1) % this.slideshowItems.length;

        this.slideshowItems.forEach(function(item) {
            item.classList.remove('slideshow__item--current');
            item.classList.remove('slideshow__item--prev');
            item.classList.remove('slideshow__item--next');
        });

        this.slideshowItems[prevIdx].classList.add('slideshow__item--prev');
        currentItem.classList.add('slideshow__item--current');
        this.slideshowItems[nextIdx].classList.add('slideshow__item--next');

        this.prevItem = currentItem;
    };

    CBPGridGallery.prototype._navigate = function(direction) {
        var newIndex = this.current;
        if (direction === 'next') {
            newIndex = (this.current + 1) % this.slideshowItems.length;
        } else if (direction === 'prev') {
            newIndex = (this.current - 1 + this.slideshowItems.length) % this.slideshowItems.length;
        }
        this._showItem(newIndex);
    };

    CBPGridGallery.prototype._resize = function() {
        if (this.isSlideshowVisible) {
            // You can add resize logic here if needed
            // For example, adjust slideshow item sizes or translate values
            // This is placeholder - update based on your UI needs
        }
    };

    // Expose to global scope
    window.CBPGridGallery = CBPGridGallery;

})(window);
