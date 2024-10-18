import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";
import "daisyui";
import "./bootstrap";

window.setupEditor = function (content) {
    let editor;

    return {
        content: content,

        init(element) {
            editor = new Editor({
                element: element,
                extensions: [StarterKit],
                content: this.content,
                onUpdate: ({ editor }) => {
                    this.content = editor.getHTML();
                },
            });

            this.editor = editor;

            this.$watch("content", (content) => {
                // If the new content matches TipTap's then we just skip.
                if (content === editor.getHTML()) return;

                editor.commands.setContent(content, false);
            });
            editor.commands.setContent(this.content, false);
        },
    };
};
