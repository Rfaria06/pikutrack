import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";
import "daisyui";
import "./bootstrap";

window.setupEditor = function (content) {
    return (() => {
        let _editor;

        return {
            editor: () => _editor,
            proxy: null,
            content: content,
            init(element) {
                _editor = new Editor({
                    element: element,
                    extensions: [StarterKit],
                    content: this.content,
                    onUpdate: ({ editor }) => {
                        this.content = editor.getHTML();
                    },
                });
                this.proxy = _editor;
            },
        };
    })();
};
