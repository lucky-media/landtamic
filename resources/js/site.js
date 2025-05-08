// This is all you.
import "@fontsource/manrope/400.css";
import "@fontsource/manrope/500.css";
import "@fontsource/manrope/600.css";
import "@fontsource/manrope/700.css";
import "@fontsource/manrope/800.css";
import resize from "@alpinejs/resize";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.plugin(resize);

Alpine.start();
