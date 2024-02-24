



module.exports = {
    "env": {
        "browser": true,
        "es2021": true
    },
    "extends": "plugin:vue/vue3-essential",
    //extends: ['plugin:vue/recommended'],
    "overrides": [
        {
            "env": {
                "node": true
            },
            "files": [
                ".eslintrc.{js,cjs}"
            ],
            "parserOptions": {
                "sourceType": "script"
            }
        }
    ],
    "parserOptions": {
        "ecmaVersion": "latest",
        "sourceType": "module"
    },
    "plugins": [
        "vue"
    ],
    "rules": {
    },
    processor: 'vue/vue',
}
