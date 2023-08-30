import { registerBlockType } from '@wordpress/blocks';
import { PlainText, useBlockProps } from "@wordpress/block-editor";
import { SelectControl } from "@wordpress/components";

// Register the block
registerBlockType('jcal/header', {
    title: "JCal header", 
    attributes: {
        color: {type: "string", default: "tgray"},
        content: {type: "string"},
    },
    edit: function ({attributes, setAttributes}) {
        const blockProps = useBlockProps();

        const fullClassesForTw = "bg-tgray text-tgray bg-tblue text-tblue bg-tyellow text-tyellow";

        return (
            <div {...blockProps} class="mt-24 mb-16">
                <div className={`w-12 h-[6px] bg-${attributes.color} mb-8`}></div>
                <PlainText value={attributes.content} onChange={content => setAttributes({content})} tagName="h2" placeholder="Header text..." class={`text-3xl sm:text-6xl font-black uppercase text-${attributes.color}`}/>
                <SelectControl
                    label="Color"
                    class="mt-8"
                    value={attributes.color}
                    options={[
                        {label: "Gray", value: "tgray"},
                        {label: "Blue", value: "tblue"},
                        {label: "Yellow", value: "tyellow"},
                    ]}
                    onChange={color => setAttributes({color})}
                />
            </div>
        );
    },
    save: function ({attributes}) {
        return (
            <div class="mt-24 mb-16">
                <div className={`w-12 h-[6px] bg-${attributes.color} mb-8`}></div>
                <h2 class={`text-3xl sm:text-6xl font-black uppercase text-${attributes.color}`}>{attributes.content}</h2>
            </div>   
        )
    },
});