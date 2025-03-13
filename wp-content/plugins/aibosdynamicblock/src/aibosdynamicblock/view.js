import { getContext, store } from "@wordpress/interactivity";
/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

/* eslint-disable no-console */
console.log( 'Hello World! (from create-block-aibosdynamicblock block)' );
/* eslint-enable no-console */
store("bradsboilerplate",{
   actions:{
    toggleSkyColor: () => {
        const context = getContext();
        context.showSkyColor = !context.showSkyColor;
    },
    toggleGrassColor: ()=> {
        const context = getContext();
        context.showGrassColor = !context.showGrassColor;
        },
        accessExample: () => {
            const context = getContext();
            context.alert('The sky color is ${context.attributes.skyColor}');
            },
        }
});
store("create-block", {
    actions:{
      test: () => {
        alert("wow");
      }, 
    }
});
store( 'wpmovies', {
    actions: {
      toggle: () => {
        const context = getContext();
        context.isOpen = !context.isOpen;
      },
    },
  });

