import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

// Register the block
registerBlockType('jcal/audio', {
    title: "JCal audio", 
    edit: function () {
        const blockProps = useBlockProps();

        return (
            <div {...blockProps}>
                <div className="p-4 bg-tyellow">
                    <div><span class="font-bold uppercase mb-8 opacity-50">JCal audio bottom bar (put an audio block inside here)</span></div>
                    <InnerBlocks/>
                </div>
            </div>
        );
    },
    save: function () {
        return (
            <>
                <div className="bg-tyellow p-5 my-16">
                    <div class="text-3xl mb-6"><span><i class="fa-solid fa-circle-play"></i></span></div>
                    <div><span class="text-lg font-bold uppercase mb-2">Listen to this story</span></div>
                    <div><span class="text-base">This is an audio story. Use the bar at the bottom of the screen to listen to it.</span></div>
                </div>
                <div className="fixed bottom-0 left-0 w-full h-16 px-4 bg-tyellow">
                    <div class="font-bold uppercase hidden md:flex absolute left-4 top-0 h-full items-center text-sm lg:text-xl"><span>Listen to this story</span></div>
                    <div className="md:max-w-sm lg:max-w-lg xl:max-w-3xl mx-auto h-full flex items-center [&>.wp-block-audio]:w-full">
                        <InnerBlocks.Content/>
                    </div>
                </div>
            </>
        )
    },
});