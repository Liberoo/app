
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
        const counterElement = el[0].querySelector('.counter__an');
        const counterValue = parseFloat(counterElement.innerText);
        counterElement.innerText = '0';
        const wrapper = document.querySelector('.counter__wrapper');
        const speed = 50;
        const inc = counterValue / speed;


        let count = 0;

        function counter() {
            count = count + inc;
            if (count < counterValue - inc) {

                if (Number.isInteger(counterValue)) {
                    counterElement.innerText = Math.round(count + inc);
                }
                else {
                    counterElement.innerText = Math.round((count + inc) * 10) / 10;
                }
                setTimeout(counter, 100)
            }
            else {
                counterElement.innerText = counterValue;
            }

        }
        let a = 0

        window.addEventListener('scroll', () => {
            const scrolling = window.scrollY + window.innerHeight;
            const trigger = wrapper.offsetTop + 100

            if (scrolling >= trigger && a === 0) {
                counter()
                a = 1;
            }

        });

    }


    // Initialize each block on page load (front end).
    $(document).ready(function () {
        $('.counter').each(function () {
            initializeBlock($(this));
        });
    });

    // Initialize dynamic block preview (editor).
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=Counter', initializeBlock);
    }

})(jQuery);