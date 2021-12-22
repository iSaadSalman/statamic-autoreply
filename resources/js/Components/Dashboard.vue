<template>
    <div>
        <div class="flex items-center justify-between mb-3">
            <h1 class="flex-1">Autoreply</h1>
            <div class="hidden md:flex items-center">
                <div class="btn-group"><button class="btn-primary px-3">Save</button></div>
            </div>
        </div>
        <div class="publish-fields card p-0 mb-3 configure-section">
            <div class="border-b form-group publish-field publish-field__title text-fieldtype field-w-full">
                <div class="field-inner">
                    <label for="field_title" class="publish-field-label">
                        <span class="">Subject</span>
                    </label>
                    <div class="help-block -mt-1">
                        <p>Usually a singular noun, like Editor or Admin.</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="input-group">
                        <input id="field_title" name="title" type="text" autofocus="autofocus" class="input-text">
                    </div>
                </div>
            </div>
            <div class="border-b form-group publish-field publish-field__handle slug-fieldtype field-w-full">
                <div class="field-inner">
                    <label for="field_handle" class="publish-field-label"><span class="">Body</span>
                        </button>
                    </label>
                    <div class="help-block -mt-1">
                        <p>Handles are used to reference this role on the frontend. Cannot be easily changed.</p>
                    </div>
                </div>
                <div class="flex items-center font-mono text-xs">
                    <div class="input-group">
                        <textarea id="field_handle" name="slug" type="text" class="input-text"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        components: {},

        data() {
            return {

            }
        }
    }

</script>
