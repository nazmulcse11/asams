import "./bootstrap";
// Core Js
import jQuery from "jquery";
window.$ = jQuery;
window.jQuery = jQuery;

import "tw-elements";

import Chart from 'chart.js/auto';
window.Chart = Chart
import ApexCharts from "apexcharts";
window.ApexCharts = ApexCharts;

import SimpleBar from 'simplebar';
import '/node_modules/simplebar/dist/simplebar.min.css'; // use absolute path
window.SimpleBar = SimpleBar;

// You will need a ResizeObserver polyfill for browsers that don't support it! (iOS Safari, Edge, ...)
import ResizeObserver from "resize-observer-polyfill";
window.ResizeObserver = ResizeObserver;

// alpinejs
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

// country select
import "country-select-js";

// animate css
import "animate.css";

// Icon
import "iconify-icon";

// SweetAlert
import Swal from "sweetalert2";
window.Swal = Swal;

// select2
import select2 from 'select2';
window.select2 = select2;
select2(window.$);
import 'select2/dist/css/select2.min.css';

// tooltip and popover
import tippy from "tippy.js";
import "tippy.js/dist/tippy.css";
window.tippy = tippy;

// DATA-TABLE
import DataTable from "datatables.net-dt";
window.DataTable = DataTable;

// moment
import moment from "moment/moment";
window.moment = moment;

// Cleave for input format
import cleave from 'cleave.js'
window.cleave = cleave;
window.Cleave = cleave;

// jQuery validation
import validate from "jquery-validation";
window.validate = validate;

import.meta.glob(["../images/**"]);

import { onElementsLoaded, sweetAlertDelete } from "@/helpers/functions.js"
window.onElementsLoaded = onElementsLoaded;
window.sweetAlertDelete = sweetAlertDelete;

// dropdown
import { loadDropdown, populateSelect2 } from '@/custom/dropdown.js';
window.loadDropdown = loadDropdown;
window.populateSelect2 = populateSelect2;

// helpers select2
import { loadSelect2Dropdown, loadDependentDropdowns } from "@/helpers/select2.js";
window.loadSelect2Dropdown = loadSelect2Dropdown;
window.loadDependentDropdowns = loadDependentDropdowns;

// custom DataTableCrudLibrary
import { DataTableCrudLibrary } from "@/custom/data-table-crud-library.js";
window.DataTableCrudLibrary = DataTableCrudLibrary;

// Litepicker for date range selector
import Litepicker from "litepicker";
window.Litepicker = Litepicker;

// date-fns date range picker
import { initDateRangePicker } from "./helpers/date-range-picker.js";
window.initDateRangePicker = initDateRangePicker;

// draggable
import { makeDraggable } from "./helpers/draggable.js";
window.makeDraggable = makeDraggable;

// floor plan
import { FloorPlan } from "./helpers/floor-plan.js";
window.FloorPlan = FloorPlan;

// qr code
import {QRCode} from '@chillerlan/qrcode';
window.QRCode = QRCode;

import CircleProgress from "jquery-circle-progress";
window.CircleProgress = CircleProgress;

