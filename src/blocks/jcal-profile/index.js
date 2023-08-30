import { registerBlockType } from '@wordpress/blocks';
import { PlainText, useBlockProps, MediaUploadCheck, MediaUpload } from "@wordpress/block-editor";
import {Button, TextControl} from "@wordpress/components";

const editFunction = (({attributes, setAttributes}) => {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <div class="flex">
                <div class="w-20 sm:w-44 flex-shrink-0">
                    {attributes.photo && (
                        <img src={attributes.photo} alt="" class="w-full aspect-square object-cover" />
                    )}
                    <MediaUploadCheck>
                        <MediaUpload value={attributes.photoId} onSelect={media => setAttributes({photo: media.url})} render={({open}) => (
                            <Button onClick={open}>Select photo</Button>
                        )}></MediaUpload>
                    </MediaUploadCheck>
                </div>
                <div class="text-tgray w-full">
                    <div>
                        <PlainText tagName="span" class="text-xl font-black uppercase" value={attributes.name} onChange={name => setAttributes({name})} placeholder="Name..."/>
                    </div>
                    <div>
                        <PlainText tagName="span" class="text-xl italic" value={attributes.organization} onChange={organization => setAttributes({organization})} placeholder="Organization..."/>
                    </div>
                    <div class="mt-5">
                        <PlainText tagName="span" value={attributes.bio} onChange={bio => setAttributes({bio})} placeholder="Bio..."/>
                    </div>
                    <div className="mt-8">
                        <TextControl label="Twitter URL (optional)" value={attributes.twitter} onChange={twitter => setAttributes({twitter})}/>
                    </div>
                    <div className="mt-8">
                        <TextControl label="Email (optional)" value={attributes.email} onChange={email => setAttributes({email})}/>
                    </div>
                </div>
            </div>
        </div>
    );
})

// Register the block
registerBlockType('jcal/profile', {
    title: "JCal profile", 
    attributes: {
        bio: {
            type: "string",
            selector: "p#bio",
        },
        name: {type: "string"},
        organization: {type: "string"},
        twitter: {type: "string"},
        email: {type: "string"},
        photo: {type: "string"},
    },
    edit: editFunction,
    save: function ({attributes}) {
        return (
            <div class="mb-12 flex jcal-profile-block-bio-selector">
                <div class="w-20 sm:w-44 mr-6 flex-shrink-0">
                    {attributes.photo && (
                        <img src={attributes.photo} alt={`Headshot of ${attributes.name}`} className="aspect-square w-full object-cover" />
                    )}
                </div>
                <div class="text-tgray w-full">
                    <div><span className="text-xl font-black uppercase">{attributes.name}</span></div>
                    <div><span className="text-xl italic">{attributes.organization}</span></div>
                    <div class="mt-5 line-clamp-4 jcal-profile-block-bio"><span>{attributes.bio}</span></div>
                    <div class="mt-5 flex items-center">
                        <button class="text-xs text-tblue font-black uppercase mr-4 bio-expand-toggle-button">Full bio</button>
                        {attributes.twitter && (
                            <a href={attributes.twitter}><i class="fa-brands fa-twitter mr-4"></i></a>
                        )}
                        {attributes.email && (
                            <a href={`mailto:${attributes.email}`}><i class="fa-solid fa-envelope mr-4"></i></a>
                        )}
                    </div>
                </div>
            </div>   
        )
    },
});