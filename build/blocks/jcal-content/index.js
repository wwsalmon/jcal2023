!function(){"use strict";var e=window.wp.element,t=window.wp.blocks,n=window.wp.blockEditor;(0,t.registerBlockType)("jcal/content",{title:"JCal content",edit:function(){const t=(0,n.useBlockProps)();return(0,e.createElement)("div",{...t},(0,e.createElement)("div",{className:"p-4 bg-gray-100"},(0,e.createElement)("div",null,(0,e.createElement)("span",{class:"font-bold uppercase mb-8 opacity-50"},"JCal Content Block (for formatting)")),(0,e.createElement)(n.InnerBlocks,null)))},save:function(){return(0,e.createElement)("div",{className:"content"},(0,e.createElement)(n.InnerBlocks.Content,null))}})}();