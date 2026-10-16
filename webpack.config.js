// The platform ships the whole Encore setup: the `_platform_ui` entry (Tabler, the Stimulus
// app, the platform controllers), Sass, PostCSS, TypeScript, ESLint and jQuery. Chain your
// own entries onto it — see docs/frontend/index.md.
import Encore from '@solidworx/platform/webpack.config.js';

export default Encore
    .enableStimulusBridge('./assets/controllers.json')
    .getWebpackConfig();
