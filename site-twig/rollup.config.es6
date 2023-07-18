import {nodeResolve} from "@rollup/plugin-node-resolve";
import terser from "@rollup/plugin-terser";
import {banner} from "./templates/assets/scripts/banner.es6";
import json from "@rollup/plugin-json";
import commonjs from "@rollup/plugin-commonjs";

const production = process.env.MINIFY === 'on';

const plugins = [
    nodeResolve(),
    commonjs(),
    json(),
];

if (production) {
    plugins.push(...[
        terser(),
    ]);
}

const config = [
    {
        input: './templates/assets/scripts/main.es6',
        output: {
            file: './templates/assets/scripts/main.js',
            format: 'es',
            sourcemap: !production,
            banner,
        },
        plugins
    },
];

// noinspection JSUnusedGlobalSymbols
export default config;
