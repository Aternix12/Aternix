require('./bootstrap');

import 'overlayscrollbars/overlayscrollbars.css';
import { OverlayScrollbars } from 'overlayscrollbars';

const osInstance = OverlayScrollbars(document.querySelector('body'), {});
