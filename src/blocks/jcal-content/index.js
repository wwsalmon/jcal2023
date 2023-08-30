import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";

// Register the block
registerBlockType('jcal/content', {
    title: "JCal content", 
    edit: function () {
        const blockProps = useBlockProps();

        return (
            <div {...blockProps}>
                <div className="p-4 bg-gray-100">
                    <div><span class="font-bold uppercase mb-8 opacity-50">JCal Content Block (for formatting)</span></div>
                    <InnerBlocks/>
                </div>
            </div>
        );
    },
    save: function () {
        return (
            <div className="content">
                <InnerBlocks.Content/>
            </div>
        )
    },
});