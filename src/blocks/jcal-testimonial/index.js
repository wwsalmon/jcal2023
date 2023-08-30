import { registerBlockType } from '@wordpress/blocks';
import { RichText, useBlockProps } from "@wordpress/block-editor";
import {SelectControl} from "@wordpress/components";

// Register the block
registerBlockType('jcal/testimonial', {
    title: "JCal testimonial", 
    attributes: {
        color: {
            type: "string",
            default: "tlightblue",
        },
        quote: {
            type: "string",
            selector: "p",
        },
        name: {type: "string"},
        school: {type: "string"},
    },
    edit: function ({attributes, setAttributes}) {
        const blockProps = useBlockProps();

        const fullClassesForTw = "bg-tlightblue border-l-tlightblue border-t-tlightblue bg-tlightyellow border-l-tlightyellow border-t-tlightyellow";

        return (
            <div {...blockProps}>
                <div class={`bg-${attributes.color} p-4 text-tgray`}>
                    <RichText tagName="span" value={attributes.quote} onChange={quote => setAttributes({quote})} placeholder="Enter the quote here..." allowedFormats={ [ 'core/bold' ] }/>
                </div> 
                <div className={`border-[12px] w-0 border-l-${attributes.color} border-t-${attributes.color} border-r-transparent border-b-transparent`}></div>
                <div className="mt-4 text-sm text-tgray">
                    <input type="text" class="uppercase block font-bold" placeholder="Student name..." value={attributes.name} onChange={e => setAttributes({name: e.target.value})}/>
                    <input type="text" class="block" placeholder="Student school..." value={attributes.school} onChange={e => setAttributes({school: e.target.value})}/>
                </div>
                <div className="mt-8">
                    <SelectControl
                        label="Color"
                        value={attributes.color}
                        options={[
                            {label: "Blue", value: "tlightblue"},
                            {label: "Yellow", value: "tlightyellow"},
                        ]}
                        onChange={color => setAttributes({color})}
                    />
                </div>
            </div>
        );
    },
    save: function ({attributes}) {
        return (
            <div class="mb-8">
                <div class={`bg-${attributes.color} p-4 text-tgray`}>   
                    <RichText.Content tagName="span" value={attributes.quote}/>
                </div>
                <div className={`border-[12px] w-0 border-l-${attributes.color} border-t-${attributes.color} border-r-transparent border-b-transparent`}></div>
                <div className="mt-4 text-sm text-tgray">
                    <span class="uppercase font-bold">{attributes.name}</span><br/><span>{attributes.school}</span>
                </div>
            </div>   
        )
    },
});