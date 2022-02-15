

(function ($) {
    /**
     * initializeBlock
     *
     * Adds custom JavaScript to the block HTML.
     *
     * @date    15/4/19
     * @since   1.0.0
     *
     * @param   object $block The block jQuery element.
     * @param   object attributes The block attributes (only available when editing).
     * @return  void
     */
    var initializeBlock = function (el) {
        const firstHeader = document.querySelector('.accord__headline');
        console.log(firstHeader)
        firstHeader.classList.add('active');
        firstHeader.nextElementSibling.style.maxHeight = firstHeader.nextElementSibling.scrollHeight + 'px';

        const headers = el[0].querySelectorAll('.accord__headline');
        headers.forEach(header => {
            header.addEventListener('click', () => {
                const findActive = document.querySelector('.accord__headline.active');

                if (findActive && findActive !== header) {
                    findActive.classList.toggle('active');
                    findActive.nextElementSibling.style.maxHeight = 0;
                }
                header.classList.toggle('active');
                const elBody = header.nextElementSibling;
                if (header.classList.contains('active')) {
                    elBody.style.maxHeight = elBody.scrollHeight + 'px';
                }
                else {
                    elBody.style.maxHeight = 0;
                }


            });
        });


    }


    // Initialize each block on page load (front end).
    $(document).ready(function () {
        $('.accord__wrapper ').each(function () {
            initializeBlock($(this));
        });
    });

    // Initialize dynamic block preview (editor).
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=accordion', initializeBlock);
    }

})(jQuery);