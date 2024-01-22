@extends('layouts.app')

@section('content')
<link rel="preload" href="{{ asset('public') }}/css/2d9217f0f0fb802c.css" as="style" />
<link rel="stylesheet" href="{{ asset('public') }}/css/2d9217f0f0fb802c.css" data-n-g="" />
<link rel="preload" href="{{ asset('public') }}/css/5b51838db7bb7355.css" as="style" />
<link rel="stylesheet" href="{{ asset('public') }}/css/5b51838db7bb7355.css" data-n-p="" />

<style data-styled="" data-styled-version="5.3.9">
    body {
        font-size: 2rem !important;
        color: #000000;
    }

    .btn {
        padding: 1.3rem 2.8rem !important;
    }

    footer.container .row {
        margin-bottom: 40px;
    }

    footer.container {
        margin-top: 24px;
    }

    .copyright {
        margin-bottom: 20px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 250 !important;
    }

    .ejUntK {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: var(--color-action);
        border: 0;
        border-radius: 5rem;
        color: var(--color-action-contrast);
        cursor: pointer;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-family: var(--font-family);
        font-size: var(--button-font-size);
        -webkit-font-smoothing: antialiased;
        font-weight: var(--button-font-weight);
        padding: 1.9rem 2.8rem;
        text-align: center;
        -webkit-text-decoration: none;
        text-decoration: none;
        -webkit-transition: background-color var(--animation-duration) var(--animation-timing);
        transition: background-color var(--animation-duration) var(--animation-timing);
        -webkit-user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        line-height: 110%;
        -webkit-letter-spacing: -0.036rem;
        -moz-letter-spacing: -0.036rem;
        -ms-letter-spacing: -0.036rem;
        letter-spacing: -0.036rem;
    }

    /*!sc*/
    .ejUntK .icon-wrapper {
        width: 1.11em;
        height: 1.11em;
        margin-right: 0.33em;
    }

    /*!sc*/
    .ejUntK .icon-wrapper img,
    .ejUntK .icon-wrapper svg {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        object-position: center center;
    }

    /*!sc*/
    .ejUntK .icon>* {
        width: 100%;
        height: 100%;
    }

    /*!sc*/
    .ejUntK.icon-only {
        padding: 1.9rem;
        border-radius: 50%;
    }

    /*!sc*/
    .ejUntK.icon-only .icon-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-right: 0;
    }

    /*!sc*/
    .ejUntK:hover {
        background-color: var(--color-action-light);
    }

    /*!sc*/
    .ejUntK:focus-visible {
        outline: var(--focus-outline);
        outline-offset: var(--focus-outline-offset);
    }

    /*!sc*/
    .ejUntK:disabled {
        cursor: not-allowed;
        opacity: 0.5;
    }

    /*!sc*/
    .ejUntK.sm,
    .ejUntK.small {
        font-size: 1.6rem;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        -webkit-letter-spacing: -0.048rem;
        -moz-letter-spacing: -0.048rem;
        -ms-letter-spacing: -0.048rem;
        letter-spacing: -0.048rem;
        padding: 1rem 1.4rem;
    }

    /*!sc*/
    .ejUntK.large,
    .ejUntK.lg {
        padding: var(--spacing-base);
    }

    /*!sc*/
    .ejUntK.full-width {
        width: 100%;
    }

    /*!sc*/
    .ejUntK.inverse {
        background-color: var(--color-action-contrast);
        color: var(--color-action);
        border: var(--border);
        border-color: var(--color-action);
    }

    /*!sc*/
    .ejUntK.inverse:hover {
        color: var(--color-action-light);
        border-color: var(--color-action-light);
    }

    /*!sc*/
    .ejUntK .label {
        margin-left: 0.3rem;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /*!sc*/
    .ejUntK.secondary {
        background-color: var(--color-action-inverse);
        color: var(--color-action);
    }

    /*!sc*/
    .ejUntK.secondary:hover {
        color: var(--color-action-muted);
    }

    /*!sc*/
    .ejUntK.tertiary {
        background-color: rgba(255, 255, 255, 0.16);
        color: var(--color-white);
    }

    /*!sc*/
    .ejUntK.bordered {
        border: 1px solid currentColor;
    }

    /*!sc*/
    data-styled.g241[id="sc-52c9381e-0"] {
        content: "ejUntK,";
    }

    /*!sc*/
    .ibcWNX {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: var(--spacing-xs);
    }

    /*!sc*/
    @media (max-width: 768px) {
        .ibcWNX {
            width: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
    }

    /*!sc*/
    data-styled.g244[id="sc-b94e47b0-0"] {
        content: "ibcWNX,";
    }

    /*!sc*/
    .hbWhaC {
        cursor: pointer;
    }

    /*!sc*/
    data-styled.g245[id="sc-f2282c81-0"] {
        content: "hbWhaC,";
    }

    /*!sc*/
    .coQnmZ:before,
    .coQnmZ:after {
        content: attr(data-label);
        content: attr(data-label) / '""';
        alt: '""';
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transition: -webkit-transform var(--animation-duration) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration) var(--animation-timing);
        transition: transform var(--animation-duration) var(--animation-timing);
    }

    /*!sc*/
    .coQnmZ:before {
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    /*!sc*/
    .coQnmZ:after {
        color: var(--color-action-inverse);
        -webkit-transform: translateY(100%);
        -ms-transform: translateY(100%);
        transform: translateY(100%);
    }

    /*!sc*/
    .theme-light .sc-f2282c81-1:before {
        color: var(--color-action);
    }

    /*!sc*/
    .theme-dark .sc-f2282c81-1:before {
        color: var(--color-action-inverse);
    }

    /*!sc*/
    .active .sc-f2282c81-1:before {
        -webkit-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    /*!sc*/
    .active .sc-f2282c81-1:after {
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    /*!sc*/
    .coQnmZ .visually-hidden {
        opacity: 0;
    }

    /*!sc*/
    data-styled.g246[id="sc-f2282c81-1"] {
        content: "coQnmZ,";
    }

    /*!sc*/
    .jScfrn {
        border: none;
        width: 20px;
        height: 20px;
        -webkit-transition-property: color, background-color, border-color,
            text-decoration-color, fill, stroke;
        transition-property: color, background-color, border-color,
            text-decoration-color, fill, stroke;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
        position: relative;
    }

    /*!sc*/
    .jScfrn:hover {
        opacity: 0.7;
    }

    /*!sc*/
    .jScfrn .burger {
        position: absolute;
        inset: 0;
    }

    /*!sc*/
    .jScfrn .bun {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: currentColor;
        -webkit-transition-property: -webkit-transform;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
    }

    /*!sc*/
    .jScfrn .bun:nth-of-type(1) {
        -webkit-transform: translateY(calc(-50% - 3px));
        -ms-transform: translateY(calc(-50% - 3px));
        transform: translateY(calc(-50% - 3px));
    }

    /*!sc*/
    .jScfrn .bun:nth-of-type(1)[data-open="true"] {
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    /*!sc*/
    .jScfrn .bun:nth-of-type(2) {
        -webkit-transform: translateY(calc(-50% + 3px));
        -ms-transform: translateY(calc(-50% + 3px));
        transform: translateY(calc(-50% + 3px));
    }

    /*!sc*/
    .jScfrn .bun:nth-of-type(2)[data-open="true"] {
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    /*!sc*/
    data-styled.g247[id="sc-4e93ed3a-0"] {
        content: "jScfrn,";
    }

    /*!sc*/
    .jikIFZ {
        white-space: nowrap;
    }

    /*!sc*/
    data-styled.g248[id="sc-19886acc-0"] {
        content: "jikIFZ,";
    }

    /*!sc*/
    .eVtVwx {
        display: inline-block;
        width: 0.8em;
        height: 0.8em;
        margin-left: 0.2em;
        margin-top: -0.1em;
    }

    /*!sc*/
    .hoverable .sc-19886acc-1 {
        -webkit-transition: -webkit-transform var(--animation-duration-fast) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration-fast) var(--animation-timing);
        transition: transform var(--animation-duration-fast) var(--animation-timing);
    }

    /*!sc*/
    .hoverable:hover .sc-19886acc-1,
    .hoverable.active .eVtVwx {
        -webkit-transform: translateX(66%);
        -ms-transform: translateX(66%);
        transform: translateX(66%);
    }

    /*!sc*/
    data-styled.g249[id="sc-19886acc-1"] {
        content: "eVtVwx,";
    }

    /*!sc*/
    .drFFcQ {
        cursor: pointer;
    }

    /*!sc*/
    .drFFcQ .title {
        font: var(--font-mega-nav-anchor);
        -webkit-letter-spacing: -0.016rem;
        -moz-letter-spacing: -0.016rem;
        -ms-letter-spacing: -0.016rem;
        letter-spacing: -0.016rem;
    }

    /*!sc*/
    .drFFcQ .subtitle {
        color: var(--color-action-muted);
        font: var(--font-label-0);
        -webkit-transition: color var(--animation-duration) var(--animation-timing);
        transition: color var(--animation-duration) var(--animation-timing);
    }

    /*!sc*/
    .drFFcQ:hover .subtitle {
        color: var(--color-action);
    }

    /*!sc*/
    data-styled.g250[id="sc-3dc6b2de-0"] {
        content: "drFFcQ,";
    }

    /*!sc*/
    .iBXLFj {
        position: absolute;
        top: -1.3rem;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: var(--color-white);
    }

    /*!sc*/
    data-styled.g251[id="sc-a9c25718-0"] {
        content: "iBXLFj,";
    }

    /*!sc*/
    .ccmyjw {
        width: 100%;
        height: auto;
        --mega-padding-top: 9.5rem;
        --mega-padding-right: max(env(safe-area-inset-right),
                var(--spacing-lg));
        --mega-padding-bottom: var(--spacing-base);
        --mega-padding-left: max(env(safe-area-inset-left), var(--spacing-lg));
        --mega-padding: var(--mega-padding-top) var(--mega-padding-right) var(--mega-padding-bottom) var(--mega-padding-left);
        padding: var(--mega-padding);
        z-index: -1;
        position: absolute;
        top: 0;
        -webkit-transform: translateY(-25%);
        -ms-transform: translateY(-25%);
        transform: translateY(-25%);
        -webkit-transition-property: -webkit-transform, opacity, visibility;
        -webkit-transition-property: transform, opacity, visibility;
        transition-property: transform, opacity, visibility;
        -webkit-transition-duration: var(--animation-duration-fast);
        transition-duration: var(--animation-duration-fast);
        -webkit-transition-timing-function: var(--animation-timing);
        transition-timing-function: var(--animation-timing);
        opacity: 0;
        visibility: hidden;
    }

    /*!sc*/
    .ccmyjw.active {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    /*!sc*/
    .ccmyjw .menu-wrapper {
        position: relative;
        margin: 0 calc(var(--mega-padding-right) * -1) calc(var(--mega-padding-bottom) * -1) calc(var(--mega-padding-left) * -1);
        padding: 0 var(--mega-padding-right) var(--mega-padding-bottom) var(--mega-padding-left);
    }

    /*!sc*/
    .ccmyjw .spacer {
        width: 100%;
        height: var(--spacing-lg);
    }

    /*!sc*/
    .ccmyjw .section-nav-list {
        display: grid;
        height: 0;
        overflow: hidden;
        opacity: 0;
        gap: var(--spacing-lg);
        grid-auto-flow: column;
        grid-auto-columns: 1fr;
        -webkit-transform: translateY(calc(var(--spacing-base) * -1));
        -ms-transform: translateY(calc(var(--spacing-base) * -1));
        transform: translateY(calc(var(--spacing-base) * -1));
        -webkit-transition: -webkit-transform var(--animation-duration-slow) var(--animation-timing),
            opacity var(--animation-duration-fast) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration-slow) var(--animation-timing),
            opacity var(--animation-duration-fast) var(--animation-timing);
        transition: transform var(--animation-duration-slow) var(--animation-timing),
            opacity var(--animation-duration-fast) var(--animation-timing);
    }

    /*!sc*/
    .ccmyjw .section-nav-list.active {
        height: auto;
        opacity: 1;
        -webkit-transform: translateY(0rem);
        -ms-transform: translateY(0rem);
        transform: translateY(0rem);
    }

    /*!sc*/
    .ccmyjw .section-nav-list>li {
        max-width: 40rem;
    }

    /*!sc*/
    .ccmyjw .nav-link {
        display: inline-block;
        font: var(--font-label-3);
        margin-bottom: var(--spacing-lg);
        position: relative;
    }

    /*!sc*/
    .ccmyjw .anchor-nav-item {
        color: var(--color-action-muted);
        font: var(--font-label-1);
        margin-bottom: 1.6rem;
    }

    /*!sc*/
    .ccmyjw .anchor-link {
        font: var(--font-mega-nav-anchor);
        -webkit-letter-spacing: -0.016rem;
        -moz-letter-spacing: -0.016rem;
        -ms-letter-spacing: -0.016rem;
        letter-spacing: -0.016rem;
        -webkit-transition: color var(--animation-duration-fast) var(--animation-timing);
        transition: color var(--animation-duration-fast) var(--animation-timing);
    }

    /*!sc*/
    .ccmyjw .anchor-link:hover {
        color: var(--color-action);
    }

    /*!sc*/
    data-styled.g252[id="sc-a9c25718-1"] {
        content: "ccmyjw,";
    }

    /*!sc*/
    .heSnOH {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        border: 1px solid;
        border-radius: 4rem;
        cursor: pointer;
        font: var(--font-label-2);
        line-height: 1;
        -webkit-letter-spacing: -0.032rem;
        -moz-letter-spacing: -0.032rem;
        -ms-letter-spacing: -0.032rem;
        letter-spacing: -0.032rem;
        padding: 2rem 2.8rem;
        text-align: center;
        position: relative;
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
        white-space: nowrap;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .heSnOH {
            padding: 1rem 1.4rem;
            font-size: 1.6rem;
            font-style: normal;
            font-weight: 350;
            line-height: 120%;
        }
    }

    /*!sc*/
    .heSnOH.large,
    .heSnOH.lg {
        padding: var(--spacing-base);
    }

    /*!sc*/
    .heSnOH.medium,
    .heSnOH.md {
        padding: 1.9rem 2.8rem;
    }

    /*!sc*/
    .heSnOH.full-width {
        width: 100%;
    }

    /*!sc*/
    .heSnOH.sm,
    .heSnOH.small {
        font-size: 1.6rem;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        -webkit-letter-spacing: -0.048rem;
        -moz-letter-spacing: -0.048rem;
        -ms-letter-spacing: -0.048rem;
        letter-spacing: -0.048rem;
        padding: 1rem 1.4rem;
    }

    /*!sc*/
    .heSnOH.ghost {
        border: 1px solid #fff;
        background: rgba(255, 255, 255, 0.15);
    }

    /*!sc*/
    .heSnOH.primary {
        background-color: var(--themed-background-color,
                var(--color-action-default));
        border-color: var(--themed-background-color,
                var(--color-action-default));
        color: var(--themed-color, var(--color-action-inverse));
    }

    /*!sc*/
    .heSnOH.secondary {
        background-color: transparent;
        border: 1px solid currentColor;
        color: currentColor;
        overflow: hidden;
    }

    /*!sc*/
    .heSnOH.secondary:before {
        background-color: var(--themed-background-color, var(--color-action));
        border-radius: 4rem;
        content: "";
        display: block;
        position: absolute;
        inset: 0;
        -webkit-transform: translateY(100%);
        -ms-transform: translateY(100%);
        transform: translateY(100%);
        -webkit-transition: -webkit-transform var(--animation-duration-fast) var(--ease-in-out-cubic);
        -webkit-transition: transform var(--animation-duration-fast) var(--ease-in-out-cubic);
        transition: transform var(--animation-duration-fast) var(--ease-in-out-cubic);
    }

    /*!sc*/
    .heSnOH.secondary:hover {
        border-color: var(--themed-background-color, var(--color-action));
        color: var(--themed-color, var(--color-action-contrast));
    }

    /*!sc*/
    .heSnOH.secondary:hover:before {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }

    /*!sc*/
    .heSnOH.light {
        background: rgba(255, 255, 255, 0.8);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
    }

    /*!sc*/
    .heSnOH.text-only {
        border: none;
        background: none;
    }

    /*!sc*/
    .heSnOH.white-label {
        color: var(--color-white);
    }

    /*!sc*/
    .heSnOH .label-wrapper {
        position: relative;
        overflow: hidden;
    }

    /*!sc*/
    .heSnOH .label-wrapper:before,
    .heSnOH .label-wrapper:after {
        content: attr(data-label);
        content: attr(data-label) / '""';
        alt: '""';
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transition: -webkit-transform var(--animation-duration) var(--ease-in-out-cubic);
        -webkit-transition: transform var(--animation-duration) var(--ease-in-out-cubic);
        transition: transform var(--animation-duration) var(--ease-in-out-cubic);
    }

    /*!sc*/
    .heSnOH .label-wrapper:before {
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    /*!sc*/
    .heSnOH .label-wrapper:after {
        -webkit-transform: translateY(150%);
        -ms-transform: translateY(150%);
        transform: translateY(150%);
    }

    /*!sc*/
    .heSnOH:hover .label-wrapper:before {
        -webkit-transform: translateY(-150%);
        -ms-transform: translateY(-150%);
        transform: translateY(-150%);
    }

    /*!sc*/
    .heSnOH:hover .label-wrapper:after {
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    /*!sc*/
    .heSnOH:focus-visible {
        outline: var(--focus-outline);
        outline-width: 2px;
        outline-offset: var(--focus-outline-offset);
    }

    /*!sc*/
    .heSnOH .label {
        opacity: 0;
        line-height: 1.1;
    }

    /*!sc*/
    data-styled.g253[id="sc-5de05abd-0"] {
        content: "heSnOH,";
    }

    /*!sc*/
    .bLPKxt {
        display: block;
        position: relative;
    }

    /*!sc*/
    .bLPKxt:before,
    .bLPKxt:after {
        content: attr(data-label);
        content: attr(data-label) / '""';
        alt: '""';
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transition: -webkit-transform var(--animation-duration) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration) var(--animation-timing);
        transition: transform var(--animation-duration) var(--animation-timing);
    }

    /*!sc*/
    .bLPKxt:before {
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    /*!sc*/
    .bLPKxt:after {
        color: var(--color-action-inverse);
        -webkit-transform: translateY(100%);
        -ms-transform: translateY(100%);
        transform: translateY(100%);
    }

    /*!sc*/
    .active .sc-b7b7e65f-0:before {
        -webkit-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    /*!sc*/
    .active .sc-b7b7e65f-0:after {
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    /*!sc*/
    .bLPKxt .label {
        opacity: 0;
    }

    /*!sc*/
    data-styled.g254[id="sc-b7b7e65f-0"] {
        content: "bLPKxt,";
    }

    /*!sc*/
    .fSArjK {
        --header-height: 5.6rem;
        color: var(--color-action-contrast);
        width: 100%;
        height: 100vh;
        height: 100dvh;
        background-color: var(--color-action-default);
        position: absolute;
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-transition: -webkit-transform var(--animation-duration-fast) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration-fast) var(--animation-timing);
        transition: transform var(--animation-duration-fast) var(--animation-timing);
        z-index: 100;
        top: 0;
    }

    /*!sc*/
    .fSArjK.active {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }

    /*!sc*/
    .fSArjK .submenu-header {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: var(--spacing-xs);
        height: var(--header-height);
    }

    /*!sc*/
    .fSArjK .title-label {
        font: var(--font-label-3);
        -webkit-letter-spacing: 0.04rem;
        -moz-letter-spacing: 0.04rem;
        -ms-letter-spacing: 0.04rem;
        letter-spacing: 0.04rem;
    }

    /*!sc*/
    .fSArjK .nav-wrapper {
        width: 100%;
        height: 100%;
        height: calc(100vh - var(--header-height));
        height: calc(100dvh - var(--header-height));
        overflow-y: auto;
    }

    /*!sc*/
    .fSArjK .submenu-list {
        border: 1px solid var(--color-action-default);
        font: var(--font-sub-h1-light);
        padding: var(--spacing-sm) var(--spacing-sm) var(--spacing-xl);
    }

    /*!sc*/
    .fSArjK .submenu-list:focus-visible {
        outline: none;
    }

    /*!sc*/
    .fSArjK .nav-link {
        display: block;
        margin-bottom: 1.8rem;
        -webkit-letter-spacing: -0.06rem;
        -moz-letter-spacing: -0.06rem;
        -ms-letter-spacing: -0.06rem;
        letter-spacing: -0.06rem;
    }

    /*!sc*/
    .fSArjK .sub-nav-list {
        display: block;
        margin-top: 2.6rem;
    }

    /*!sc*/
    .fSArjK .sub-nav-link {
        color: var(--color-action-muted) !important;
        display: block;
        margin-bottom: 2.4rem;
        -webkit-letter-spacing: -0.06rem;
        -moz-letter-spacing: -0.06rem;
        -ms-letter-spacing: -0.06rem;
        letter-spacing: -0.06rem;
    }

    /*!sc*/
    .fSArjK .sub-nav-link:before {
        content: "";
        display: inline-block;
        width: 0.5em;
        height: 0.5em;
        border-left: 1px solid currentColor;
        border-bottom: 1px solid currentColor;
        margin-right: 0.3em;
        vertical-align: middle;
        -webkit-transform: translateY(-0.25em);
        -ms-transform: translateY(-0.25em);
        transform: translateY(-0.25em);
    }

    /*!sc*/
    data-styled.g255[id="sc-2466a55a-0"] {
        content: "fSArjK,";
    }

    /*!sc*/
    .gNBMTT {
        -webkit-letter-spacing: -0.02em;
        -moz-letter-spacing: -0.02em;
        -ms-letter-spacing: -0.02em;
        letter-spacing: -0.02em;
    }

    /*!sc*/
    data-styled.g259[id="sc-1f036cff-0"] {
        content: "gNBMTT,";
    }

    /*!sc*/
    .oBUiH {
        font: var(--font-h1);
        -webkit-letter-spacing: -0.06em;
        -moz-letter-spacing: -0.06em;
        -ms-letter-spacing: -0.06em;
        letter-spacing: -0.06em;
    }

    /*!sc*/
    .iRNDkk {
        font: var(--font-h2);
        -webkit-letter-spacing: -0.06em;
        -moz-letter-spacing: -0.06em;
        -ms-letter-spacing: -0.06em;
        letter-spacing: -0.06em;
    }

    /*!sc*/
    .eGGDVh {
        font: var(--font-h3);
        -webkit-letter-spacing: -0.06em;
        -moz-letter-spacing: -0.06em;
        -ms-letter-spacing: -0.06em;
        letter-spacing: -0.06em;
    }

    /*!sc*/
    .csqSIz {
        font: var(--font-h4);
        -webkit-letter-spacing: -0.03em;
        -moz-letter-spacing: -0.03em;
        -ms-letter-spacing: -0.03em;
        letter-spacing: -0.03em;
    }

    /*!sc*/
    data-styled.g260[id="sc-d9f24904-0"] {
        content: "oBUiH,iRNDkk,eGGDVh,csqSIz,";
    }

    /*!sc*/
    .odNiZ {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -webkit-justify-content: start;
        -ms-flex-pack: start;
        justify-content: start;
        margin-bottom: 1.3em;
    }

    /*!sc*/
    .hZMjsW {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 1.3em;
    }

    /*!sc*/
    data-styled.g261[id="sc-42b34c08-0"] {
        content: "odNiZ,hZMjsW,";
    }

    /*!sc*/
    .cgtfNG>span {
        display: block;
        text-align: left;
    }

    /*!sc*/
    .cgtfNG>span:nth-child(even) {
        text-align: right;
        margin-left: auto;
    }

    /*!sc*/
    .kfSQeG>span {
        display: block;
        text-align: left;
    }

    /*!sc*/
    data-styled.g269[id="sc-733803e9-0"] {
        content: "cgtfNG,kfSQeG,";
    }

    /*!sc*/
    .dRRdTF {
        height: 100%;
    }

    /*!sc*/
    data-styled.g270[id="sc-ded3217a-0"] {
        content: "dRRdTF,";
    }

    /*!sc*/
    .fDFVao {
        position: relative;
        width: 100%;
        height: auto;
        overflow: hidden;
    }

    /*!sc*/
    .fDFVao.light {
        color: var(--color-white);
    }

    /*!sc*/
    .fDFVao.dark {
        color: var(--color-black);
    }

    /*!sc*/
    .fDFVao .background {
        width: 100%;
        height: calc(100% + 30vh);
        position: absolute;
        left: 0;
        top: 0;
        overflow: hidden;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fDFVao .background {
            height: calc(100% + 15vh);
        }
    }

    /*!sc*/
    .fDFVao .background>img {
        display: block;
        object-fit: cover;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
    }

    /*!sc*/
    .fDFVao .title-spacer {
        margin-top: 16.5rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fDFVao .title-spacer {
            margin-top: 9.6rem;
        }
    }

    /*!sc*/
    .fDFVao .title-wrapper {
        position: relative;
        left: calc(5rem + var(--rem-scale-viewport-half-excess));
        mix-blend-mode: exclusion;
        min-height: 50rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fDFVao .title-wrapper {
            left: 2rem;
            width: 20rem;
            min-height: 15rem;
        }
    }

    /*!sc*/
    data-styled.g274[id="sc-8441f2db-0"] {
        content: "fDFVao,";
    }

    /*!sc*/
    .dxDcsL {
        position: relative;
        left: calc(23rem + var(--rem-scale-viewport-half-excess));
        margin-top: 35rem;
        width: 34.5rem;
        font-size: var(--font-size-label-2);
        font-style: normal;
        font-weight: 350;
        line-height: 110%;
        -webkit-letter-spacing: -0.036rem;
        -moz-letter-spacing: -0.036rem;
        -ms-letter-spacing: -0.036rem;
        letter-spacing: -0.036rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dxDcsL {
            width: 18rem;
            font-size: 1.6rem;
            font-style: normal;
            font-weight: 400;
            line-height: 120%;
            -webkit-letter-spacing: -0.048rem;
            -moz-letter-spacing: -0.048rem;
            -ms-letter-spacing: -0.048rem;
            letter-spacing: -0.048rem;
            left: 2rem;
            margin-top: 20rem;
        }
    }

    /*!sc*/
    data-styled.g276[id="sc-8441f2db-2"] {
        content: "dxDcsL,";
    }

    /*!sc*/
    .kXsiSG {
        position: relative;
        width: 142rem;
        left: max(env(safe-area-inset-left),
                calc(5rem + var(--rem-scale-viewport-half-excess)));
        margin-top: 9.5rem;
        text-indent: 18rem;
        line-height: 110%;
        -webkit-letter-spacing: -0.288rem;
        -moz-letter-spacing: -0.288rem;
        -ms-letter-spacing: -0.288rem;
        letter-spacing: -0.288rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .kXsiSG {
            width: 35rem;
            left: max(env(safe-area-inset-left), 2rem);
            margin-top: 2.6rem;
            text-indent: 7rem;
            font-size: 2.4rem;
            line-height: 100%;
            -webkit-letter-spacing: -0.096rem;
            -moz-letter-spacing: -0.096rem;
            -ms-letter-spacing: -0.096rem;
            letter-spacing: -0.096rem;
        }
    }

    /*!sc*/
    data-styled.g277[id="sc-8441f2db-3"] {
        content: "kXsiSG,";
    }

    /*!sc*/
    .bNXrId {
        position: relative;
        padding-right: calc(15.8rem + var(--rem-scale-viewport-half-excess));
        line-height: 110%;
        -webkit-letter-spacing: -0.288rem;
        -moz-letter-spacing: -0.288rem;
        -ms-letter-spacing: -0.288rem;
        letter-spacing: -0.288rem;
        text-align: right;
        padding-bottom: 20rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .bNXrId {
            left: max(env(safe-area-inset-left), 2rem);
            padding-right: 6.2rem;
            margin-top: 5.5rem;
            font-size: 2.4rem;
            line-height: 100%;
            -webkit-letter-spacing: -0.096rem;
            -moz-letter-spacing: -0.096rem;
            -ms-letter-spacing: -0.096rem;
            letter-spacing: -0.096rem;
            padding-bottom: 6.7rem;
        }
    }

    /*!sc*/
    data-styled.g278[id="sc-8441f2db-4"] {
        content: "bNXrId,";
    }

    /*!sc*/
    .gLYHax {
        left: 50%;
        -webkit-transform: translate(-50%, -200%);
        -ms-transform: translate(-50%, -200%);
        transform: translate(-50%, -200%);
        z-index: 100;
        -webkit-transition: -webkit-transform var(--animation-duration) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration) var(--animation-timing);
        transition: transform var(--animation-duration) var(--animation-timing);
    }

    /*!sc*/
    .gLYHax {
        position: absolute !important;
    }

    /*!sc*/
    .gLYHax:focus-visible {
        -webkit-transform: translate(-50%, var(--header-container-padding-top));
        -ms-transform: translate(-50%, var(--header-container-padding-top));
        transform: translate(-50%, var(--header-container-padding-top));
    }

    /*!sc*/
    @media (max-width: 768px) {
        .gLYHax {
            display: none;
        }
    }

    /*!sc*/
    data-styled.g285[id="sc-48e9475c-0"] {
        content: "gLYHax,";
    }

    /*!sc*/
    .fWBiDS {
        color: var(--color-action-contrast);
        width: 100%;
        height: 100vh;
        height: 100dvh;
        max-width: none;
        max-height: none;
        background-color: var(--color-action-default);
        position: absolute;
        top: 0;
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-transition: -webkit-transform var(--animation-duration-fast) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration-fast) var(--animation-timing);
        transition: transform var(--animation-duration-fast) var(--animation-timing);
        z-index: 10;
        display: block;
    }

    /*!sc*/
    @media (min-width: 769px) {
        .fWBiDS {
            display: none;
        }
    }

    /*!sc*/
    .fWBiDS.open {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }

    /*!sc*/
    .fWBiDS .level-1 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        height: 100%;
        -webkit-flex: 0 1 0;
        -ms-flex: 0 1 0;
        flex: 0 1 0;
    }

    /*!sc*/
    .fWBiDS .nav-section-header {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: var(--spacing-xs);
    }

    /*!sc*/
    @media (orientation: landscape) {
        .fWBiDS .nav-section-header {
            padding: 0;
        }
    }

    /*!sc*/
    .fWBiDS .search {
        width: 6.8rem;
        height: 5.6rem;
    }

    /*!sc*/
    .fWBiDS .brand {
        width: 16.2rem;
        height: 3.8rem;
        min-height: 38px;
    }

    /*!sc*/
    .fWBiDS .brand .logo-link {
        height: 3.8rem;
    }

    /*!sc*/
    .fWBiDS .wordmark {
        display: block !important;
        object-fit: contain;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fWBiDS .wordmark {
            width: 100%;
            height: 100%;
        }
    }

    /*!sc*/
    .fWBiDS .nav-wrapper {
        height: 100%;
        overflow-y: auto;
    }

    /*!sc*/
    .fWBiDS .nav-list {
        padding: var(--spacing-sm);
    }

    /*!sc*/
    .fWBiDS .nav-list:focus-visible {
        outline: none;
    }

    /*!sc*/
    .fWBiDS .nav-button {
        font: var(--font-sub-h1-light);
        margin-bottom: 1.8rem;
        padding: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: 0.8rem;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-left: -0.3rem;
        -webkit-letter-spacing: -0.06rem;
        -moz-letter-spacing: -0.06rem;
        -ms-letter-spacing: -0.06rem;
        letter-spacing: -0.06rem;
    }

    /*!sc*/
    .fWBiDS .nav-button .label {
        margin-left: 0;
    }

    /*!sc*/
    .fWBiDS .nav-button:hover {
        background-color: transparent;
    }

    /*!sc*/
    .fWBiDS .get-started-button {
        background-color: var(--color-action-contrast);
        border-color: var(--color-action-contrast);
        color: var(--color-action-default);
    }

    /*!sc*/
    .fWBiDS .nav-section-footer {
        padding: var(--spacing-sm);
    }

    /*!sc*/
    @media (orientation: landscape) {
        .fWBiDS .nav-section-footer {
            padding: var(--spacing-xs) var(--spacing-sm);
            margin: 0 auto;
            width: 100%;
            max-width: 320px;
        }

        .fWBiDS .nav-section-footer .get-started-button {
            padding: var(--spacing-xs) var(--spacing-sm);
        }
    }

    /*!sc*/
    .fWBiDS .apps-store-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: var(--spacing-sm);
        margin: var(--spacing-base) 0 var(--spacing-sm);
    }

    /*!sc*/
    @media (orientation: landscape) {
        .fWBiDS .apps-store-wrapper {
            gap: var(--spacing-xs);
            margin-top: var(--spacing-xs);
            margin-bottom: 0;
        }
    }

    /*!sc*/
    .fWBiDS .app-store-button {
        display: block;
        width: 100%;
    }

    /*!sc*/
    .fWBiDS .app-store-button>img {
        width: 100%;
    }

    /*!sc*/
    data-styled.g286[id="sc-7da0adc7-0"] {
        content: "fWBiDS,";
    }

    /*!sc*/
    .jVPFlx {
        display: block;
        width: 1.2rem;
        height: 1.2rem;
    }

    /*!sc*/
    data-styled.g287[id="sc-7da0adc7-1"] {
        content: "jVPFlx,";
    }

    /*!sc*/
    .izRDca {
        width: 100%;
        position: relative;
    }

    /*!sc*/
    .izRDca .container-inner {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
        font-size: var(--font-size-body);
    }

    /*!sc*/
    data-styled.g290[id="sc-fc3e0d65-0"] {
        content: "izRDca,";
    }

    /*!sc*/
    .iatwKH {
        --link-padding-y: 1.5rem;
        --link-padding-x: 2.4rem;
        --transition: var(--animation-duration-fast) var(--animation-timing);
        padding: var(--link-padding-y) 0;
        display: inline-block;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .iatwKH {
            display: none;
        }
    }

    /*!sc*/
    .iatwKH .nav-list {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: calc(var(--link-padding-x) * 1.5);
        position: relative;
    }

    /*!sc*/
    .iatwKH .nav-list.has-active-item .indicator {
        --active: 1;
    }

    /*!sc*/
    .iatwKH .indicator {
        background-color: var(--color-action-default);
        border-radius: 50px;
        content: "";
        display: block;
        position: absolute;
        inset: calc(var(--y1) + var(--link-padding-y) * -1) calc(var(--x2) + var(--link-padding-x) * -1) calc(var(--y2) + var(--link-padding-y) * -1) calc(var(--x1) + var(--link-padding-x) * -1);
        -webkit-transition: opacity var(--transition), scale var(--transition),
            inset var(--transition);
        transition: opacity var(--transition), scale var(--transition),
            inset var(--transition);
        opacity: var(--active, 0);
        scale: var(--active, 0);
        pointer-events: none;
    }

    /*!sc*/
    .iatwKH .nav-item {
        position: relative;
        overflow: hidden;
    }

    /*!sc*/
    .iatwKH .nav-item.active .nav-link {
        color: var(--color-action-inverse);
    }

    /*!sc*/
    .iatwKH .nav-link {
        display: block;
        position: relative;
        z-index: 1;
        -webkit-transition: color var(--transition);
        transition: color var(--transition);
    }

    /*!sc*/
    .iatwKH .nav-link.active {
        color: var(--color-action-inverse);
    }

    /*!sc*/
    .iatwKH .nav-link:focus-visible {
        outline: none;
    }

    /*!sc*/
    data-styled.g291[id="sc-1735b44d-0"] {
        content: "iatwKH,";
    }

    /*!sc*/
    .hGihGV {
        cursor: pointer;
        position: relative;
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
    }

    /*!sc*/
    .hGihGV:hover .input-container {
        border-color: var(--color-black);
        background-color: var(--color-black);
        color: var(--color-white);
    }

    /*!sc*/
    .hGihGV .search-container {
        position: relative;
        line-height: 1;
    }

    /*!sc*/
    .hGihGV .input-container {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-radius: 6rem;
        border: 1px solid currentColor;
        position: relative;
        -webkit-transition: background-color var(--animation-duration-fast) var(--animation-timing);
        transition: background-color var(--animation-duration-fast) var(--animation-timing);
    }

    /*!sc*/
    .hGihGV .search-input {
        cursor: pointer;
        display: block;
        background-color: transparent;
        width: calc(8em + 5.4rem);
        max-width: calc(8em + 5.4rem);
        height: 6rem;
        font: var(--font-label-2);
        -webkit-letter-spacing: -0.036rem;
        -moz-letter-spacing: -0.036rem;
        -ms-letter-spacing: -0.036rem;
        letter-spacing: -0.036rem;
        text-indent: 5.4rem;
        border-radius: 6rem;
        outline-color: var(--color-black);
        -webkit-transition: max-width var(--animation-duration-fast) var(--animation-timing);
        transition: max-width var(--animation-duration-fast) var(--animation-timing);
    }

    /*!sc*/
    .hGihGV .search-input::-webkit-input-placeholder {
        width: 100%;
    }

    /*!sc*/
    .hGihGV .search-input::-moz-placeholder {
        width: 100%;
    }

    /*!sc*/
    .hGihGV .search-input:-ms-input-placeholder {
        width: 100%;
    }

    /*!sc*/
    .hGihGV .search-input::placeholder {
        width: 100%;
    }

    /*!sc*/
    .hGihGV .search-input:placeholder-shown {
        text-overflow: ellipsis;
    }

    /*!sc*/
    .hGihGV .search-input::-webkit-search-cancel-button {
        -webkit-filter: grayscale(100%) invert(100%);
        filter: grayscale(100%) invert(100%);
        margin-right: 2rem;
        cursor: pointer;
        display: none;
    }

    /*!sc*/
    .hGihGV .cancel-button {
        background-color: transparent;
        display: none;
    }

    /*!sc*/
    .hGihGV .cancel-button .icon-wrapper {
        width: 1.8rem;
        height: 1.8rem;
    }

    /*!sc*/
    .hGihGV .search-icon {
        width: 1.8rem;
        height: 1.8rem;
        margin-right: 1rem;
        position: absolute;
        left: 2.8rem;
        top: calc(50% - 0.9rem);
        pointer-events: none;
    }

    /*!sc*/
    .hGihGV .results {
        list-style: none;
        display: block;
        position: absolute;
        right: 0;
        top: calc(6rem + var(--spacing-sm));
        color: var(--color-black);
        font-size: var(--button-font-size);
        border-radius: min(3.3rem, 33px);
        overflow: hidden;
        width: 100%;
        min-width: 320px;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .hGihGV .results {
            min-width: 290px;
            top: calc(6.4rem + var(--spacing-sm));
        }
    }

    /*!sc*/
    .hGihGV .result-item {
        width: 100%;
        background: var(--color-white);
        -webkit-transition-property: color, background-color;
        transition-property: color, background-color;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition-duration: 300ms;
        transition-duration: 300ms;
    }

    /*!sc*/
    .hGihGV .result-item:hover {
        background-color: var(--color-black);
        color: var(--color-white);
    }

    /*!sc*/
    .hGihGV .result-link {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: var(--spacing-sm);
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        font-size: 16px;
    }

    /*!sc*/
    .hGihGV .result-img-wrapper {
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        width: 5rem;
        height: 5rem;
    }

    /*!sc*/
    .hGihGV .result-img {
        display: block;
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    /*!sc*/
    .hGihGV .result-content-wrapper {
        margin-left: 1rem;
        width: 100%;
    }

    /*!sc*/
    .hGihGV .creator-name {
        font: var(--font-label-1);
        font-size: 16px;
        -webkit-letter-spacing: -0.048rem;
        -moz-letter-spacing: -0.048rem;
        -ms-letter-spacing: -0.048rem;
        letter-spacing: -0.048rem;
    }

    /*!sc*/
    .hGihGV .creation-name {
        margin-top: 0.3rem;
        opacity: 0.5;
        font: var(--font-label-0);
        font-size: 14px;
        -webkit-letter-spacing: -0.014rem;
        -moz-letter-spacing: -0.014rem;
        -ms-letter-spacing: -0.014rem;
        letter-spacing: -0.014rem;
    }

    /*!sc*/
    .hGihGV .see-all {
        padding: 0.5rem 0;
        padding: calc(var(--spacing-xs) / 2);
        border-bottom-left-radius: 3rem;
        border-bottom-right-radius: 3rem;
    }

    /*!sc*/
    .hGihGV.has-focus,
    .hGihGV.has-results {
        width: 100%;
    }

    /*!sc*/
    .hGihGV.has-focus .input-container,
    .hGihGV.has-results .input-container {
        border-color: var(--color-black);
        background-color: var(--color-black);
        color: var(--color-white);
    }

    /*!sc*/
    .hGihGV.has-focus .search-input,
    .hGihGV.has-results .search-input {
        width: 100%;
        max-width: 100%;
        border: none;
        outline: none;
    }

    /*!sc*/
    .hGihGV.has-focus .cancel-button,
    .hGihGV.has-results .cancel-button {
        display: block;
    }

    /*!sc*/
    .hGihGV.mobile {
        --transition: var(--animation-duration-fast) var(--animation-timing);
        padding: 0 var(--spacing-sm) var(--spacing-sm);
        width: 100%;
        -webkit-transition: max-width var(--transition);
        transition: max-width var(--transition);
    }

    /*!sc*/
    .hGihGV.mobile .input-container {
        background-color: transparent;
        border-width: 1px;
        border-color: currentColor;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        padding: 0.7rem;
        -webkit-transition: padding var(--transition);
        transition: padding var(--transition);
    }

    /*!sc*/
    .hGihGV.mobile .search-input {
        font-size: var(--font-label-1);
        width: 100%;
        height: auto;
        -webkit-letter-spacing: -0.046rem;
        -moz-letter-spacing: -0.046rem;
        -ms-letter-spacing: -0.046rem;
        letter-spacing: -0.046rem;
        text-indent: 3.4rem;
        max-width: 100%;
        -webkit-transition: max-width var(--transition);
        transition: max-width var(--transition);
    }

    /*!sc*/
    .hGihGV.mobile .search-icon {
        left: 1.5rem;
        -webkit-transition: left var(--transition);
        transition: left var(--transition);
    }

    /*!sc*/
    .hGihGV.mobile.scrolled {
        max-width: 7.3rem;
    }

    /*!sc*/
    .hGihGV.mobile.scrolled .input-container {
        width: 2.4em;
        aspect-ratio: 1 / 1;
    }

    /*!sc*/
    .hGihGV.mobile.scrolled .search-icon {
        left: 1.1rem;
    }

    /*!sc*/
    .hGihGV.mobile.scrolled .search-input {
        max-width: 2.2rem;
    }

    /*!sc*/
    .hGihGV.mobile.has-focus .input-container,
    .hGihGV.mobile.has-results .input-container {
        border-color: var(--color-action-inverse);
        background-color: var(--color-action-inverse);
        color: var(--color-action);
        width: 100%;
        aspect-ratio: auto;
    }

    /*!sc*/
    .hGihGV.mobile.has-focus .cancel-button,
    .hGihGV.mobile.has-results .cancel-button {
        color: var(--color-action);
        opacity: 1;
        pointer-events: auto;
    }

    /*!sc*/
    .hGihGV.mobile.has-focus.scrolled,
    .hGihGV.mobile.has-results.scrolled {
        max-width: 100%;
    }

    /*!sc*/
    .hGihGV.mobile.has-focus.scrolled .search-icon,
    .hGihGV.mobile.has-results.scrolled .search-icon {
        left: 1.5rem;
    }

    /*!sc*/
    .hGihGV.mobile.has-focus.scrolled .search-input,
    .hGihGV.mobile.has-results.scrolled .search-input {
        max-width: 100%;
    }

    /*!sc*/
    data-styled.g292[id="sc-63345ac4-0"] {
        content: "hGihGV,";
    }

    /*!sc*/
    .hpoANl {
        position: absolute;
        top: -1.3rem;
        right: 0;
        bottom: -1.3rem;
        left: 0;
        background: rgba(217, 217, 217, 0.05);
        -webkit-backdrop-filter: blur(30px);
        backdrop-filter: blur(30px);
        -webkit-mask-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 1) 55%,
                rgba(0, 0, 0, 0.8) 70%,
                rgba(0, 0, 0, 0) 100%);
        mask-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 1) 55%,
                rgba(0, 0, 0, 0.8) 70%,
                rgba(0, 0, 0, 0) 100%);
        -webkit-transition: opacity var(--animation-duration-slow) var(--animation-timing);
        transition: opacity var(--animation-duration-slow) var(--animation-timing);
        opacity: 0;
        pointer-events: none;
    }

    /*!sc*/
    data-styled.g293[id="sc-a1e39f15-0"] {
        content: "hpoANl,";
    }

    /*!sc*/
    .dSnLcZ {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 500;
        font-size: var(--button-font-size);
        -webkit-transform: translateY(1.3rem);
        -ms-transform: translateY(1.3rem);
        transform: translateY(1.3rem);
        -webkit-transition: -webkit-transform var(--animation-duration-slow) var(--animation-timing);
        -webkit-transition: transform var(--animation-duration-slow) var(--animation-timing);
        transition: transform var(--animation-duration-slow) var(--animation-timing);
        --header-container-padding-top: var(--spacing-sm);
        --header-container-padding-right: max(env(safe-area-inset-right),
                var(--spacing-lg));
        --header-container-padding-bottom: var(--spacing-sm);
        --header-container-padding-left: max(env(safe-area-inset-left),
                var(--spacing-lg));
        --header-container-padding: var(--header-container-padding-top) var(--header-container-padding-right) var(--header-container-padding-bottom) var(--header-container-padding-left);
    }

    /*!sc*/
    .dSnLcZ:focus-visible {
        outline: none;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    /*!sc*/
    .dSnLcZ.theme-dark {
        --themed-background-color: var(--color-action-inverse);
        --themed-color: var(--color-action-default);
        color: var(--color-action-inverse);
    }

    /*!sc*/
    .dSnLcZ.theme-dark .sc-a1e39f15-1 {
        background-color: var(--color-action-inverse);
        color: var(--color-action-default);
    }

    /*!sc*/
    .dSnLcZ.theme-light {
        --themed-background-color: var(--color-action-default);
        --themed-color: var(--color-action-inverse);
        color: var(--color-action-default);
    }

    /*!sc*/
    .dSnLcZ.scrolled {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }

    /*!sc*/
    .dSnLcZ.scrolled .backdrop {
        opacity: 1;
    }

    /*!sc*/
    .dSnLcZ .header-container {
        display: grid;
        gap: var(--spacing-xl);
        grid-template-columns: 1fr auto 1fr;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: var(--header-container-padding);
        pointer-events: none;
        position: relative;
    }

    /*!sc*/
    @media (max-width: 964px) {
        .dSnLcZ .header-container {
            gap: var(--spacing-sm);
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .header-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: 0;
            padding: 1rem 2rem;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
    }

    /*!sc*/
    .dSnLcZ .left-wrapper {
        pointer-events: auto;
        margin: calc(var(--header-container-padding-top) * -1) calc(var(--header-container-padding-right) * -1) calc(var(--header-container-padding-bottom) * -1) calc(var(--header-container-padding-left) * -1);
    }

    /*!sc*/
    .dSnLcZ .left-wrapper>.nav-wrapper {
        padding: var(--header-container-padding);
    }

    /*!sc*/
    .dSnLcZ .nav-wrapper {
        display: inline-block;
    }

    /*!sc*/
    .dSnLcZ .center-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        pointer-events: auto;
    }

    /*!sc*/
    .dSnLcZ .hamburger {
        margin-right: 1.6rem;
    }

    /*!sc*/
    @media (min-width: 769px) {
        .dSnLcZ .hamburger {
            display: none;
        }
    }

    /*!sc*/
    .dSnLcZ .logo-link {
        border-radius: 4rem;
        display: grid;
        grid-template-areas: "stack";
        justify-items: center;
        -webkit-align-content: center;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 2.7rem;
    }

    /*!sc*/
    .dSnLcZ .logo-link>* {
        grid-area: stack;
    }

    /*!sc*/
    @media (min-width: 768px) {
        .dSnLcZ .logo-link {
            height: 3.2rem;
        }

        .dSnLcZ .logo-link.scrolled .wordmark {
            opacity: 0;
        }

        .dSnLcZ .logo-link.scrolled .logomark {
            opacity: 1;
        }
    }

    /*!sc*/
    .dSnLcZ .workmark,
    .dSnLcZ .logomark {
        -webkit-transition: opacity var(--animation-duration-slow) var(--animation-timing);
        transition: opacity var(--animation-duration-slow) var(--animation-timing);
    }

    /*!sc*/
    .dSnLcZ .wordmark {
        display: block;
        width: auto;
        height: 6.5rem;
        fill: currentColor;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .wordmark {
            height: 66.666667%;
            display: none;
        }
    }

    /*!sc*/
    .dSnLcZ .logomark {
        height: 4rem;
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        opacity: 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .logomark {
            height: 3.2rem;
            opacity: 1;
        }
    }

    /*!sc*/
    .dSnLcZ .right-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: 1.4rem;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        pointer-events: auto;
        min-width: -webkit-fit-content;
        min-width: -moz-fit-content;
        min-width: fit-content;
        -webkit-flex: 1 0 0;
        -ms-flex: 1 0 0;
        flex: 1 0 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .right-wrapper {
            display: none;
        }
    }

    /*!sc*/
    .dSnLcZ .header-button {
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
    }

    /*!sc*/
    .dSnLcZ .mobile-wrapper {
        display: none;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        pointer-events: auto;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .mobile-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    /*!sc*/
    .dSnLcZ .login-link {
        white-space: nowrap;
        background: rgba(0, 0, 0, 0.15);
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .login-link {
            background: none;
            color: var(--color-action-default);
        }
    }

    /*!sc*/
    .dSnLcZ .mobile-search {
        display: none;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dSnLcZ .mobile-search {
            display: block;
        }
    }

    /*!sc*/
    data-styled.g295[id="sc-a1e39f15-2"] {
        content: "dSnLcZ,";
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eNFsDr {
            width: 100%;
        }
    }

    /*!sc*/
    data-styled.g309[id="sc-9e8951d6-0"] {
        content: "eNFsDr,";
    }

    /*!sc*/
    @media (max-width: 768px) {
        .gKrgve {
            width: 100%;
        }
    }

    /*!sc*/
    data-styled.g311[id="sc-4699cfa0-0"] {
        content: "gKrgve,";
    }

    /*!sc*/
    @media (max-width: 768px) {
        .duSywe {
            width: 100%;
        }
    }

    /*!sc*/
    data-styled.g313[id="sc-e1cf2faf-0"] {
        content: "duSywe,";
    }

    /*!sc*/
    .jAHfXq {
        display: none;
        margin-left: 0.5rem;
        vertical-align: middle;
        width: 1rem;
        height: 1rem;
    }

    /*!sc*/
    data-styled.g315[id="sc-fb16d8ea-0"] {
        content: "jAHfXq,";
    }

    /*!sc*/
    .cyPynt {
        display: none;
        margin-left: 0.5rem;
        vertical-align: middle;
        width: 1rem;
        height: 1rem;
        height: 0.2rem;
    }

    /*!sc*/
    data-styled.g316[id="sc-fb16d8ea-1"] {
        content: "cyPynt,";
    }

    /*!sc*/
    .eUmynd {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding: 6rem max(env(safe-area-inset-right),
                calc(5rem + var(--rem-scale-viewport-half-excess))) 5rem max(env(safe-area-inset-left),
                calc(5rem + var(--rem-scale-viewport-half-excess)));
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        color: #ffffff;
        background-color: #000000;
        font-size: 1.8rem;
        font-style: normal;
        font-weight: 350;
        line-height: 110%;
        -webkit-letter-spacing: -0.036rem;
        -moz-letter-spacing: -0.036rem;
        -ms-letter-spacing: -0.036rem;
        letter-spacing: -0.036rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd {
            padding: 4.8rem max(env(safe-area-inset-right), 3.4rem) 4.8rem max(env(safe-area-inset-left), 3.4rem);
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            font-size: 2.4rem;
            font-style: normal;
            font-weight: 300;
            line-height: 120%;
            -webkit-letter-spacing: -0.072rem;
            -moz-letter-spacing: -0.072rem;
            -ms-letter-spacing: -0.072rem;
            letter-spacing: -0.072rem;
        }
    }

    /*!sc*/
    .eUmynd .nav-wrapper {
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: 1fr;
        gap: var(--spacing-lg);
        width: 100%;
        margin-bottom: 4.5rem;
    }

    /*!sc*/
    .eUmynd .nav-wrapper:last-child {
        margin-bottom: 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .nav-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            gap: 1.1rem;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            margin-bottom: var(--spacing-base);
        }
    }

    /*!sc*/
    .eUmynd .nav-inner-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-align-items: flex-start;
        -webkit-box-align: flex-start;
        -ms-flex-align: flex-start;
        align-items: flex-start;
        width: 100%;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .nav-inner-wrapper {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
    }

    /*!sc*/
    @media (min-width: 769px) {
        .eUmynd .pref .label {
            max-width: 14rem;
        }
    }

    /*!sc*/
    .eUmynd .selectors {
        gap: 1rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .selectors {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
        }
    }

    /*!sc*/
    .eUmynd .lang {
        margin: 0 1rem 0 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .lang {
            margin: 0 0 1.8rem 0;
            width: 100%;
        }
    }

    /*!sc*/
    .eUmynd .site-footer-nav {
        max-width: 40rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .site-footer-nav {
            width: 100%;
        }
    }

    /*!sc*/
    .eUmynd .nav-details[open] {
        margin-bottom: var(--spacing-base);
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .nav-details[open] {
            margin-bottom: var(--spacing-sm);
        }

        .eUmynd .nav-details[open] .nav-title-link .sc-fb16d8ea-0,
        .eUmynd .nav-details[open] .nav-title .sc-fb16d8ea-0 {
            display: none;
        }

        .eUmynd .nav-details[open] .nav-title-link .sc-fb16d8ea-1,
        .eUmynd .nav-details[open] .nav-title .sc-fb16d8ea-1 {
            display: inline-block;
        }
    }

    /*!sc*/
    .eUmynd .nav-summary {
        display: block;
        margin-bottom: 1.1rem;
    }

    /*!sc*/
    .eUmynd .nav-summary::-webkit-details-marker {
        display: none;
    }

    /*!sc*/
    .eUmynd .nav-summary:details-marker {
        display: none;
    }

    /*!sc*/
    @media (max-width: 768px) {

        .eUmynd .nav-summary:has(> :not([href]).strapi-link) .nav-title-link .sc-fb16d8ea-0,
        .eUmynd .nav-summary:has(> :not([href]).strapi-link) .nav-title .sc-fb16d8ea-0 {
            display: none;
        }
    }

    /*!sc*/
    .eUmynd .nav-title-link,
    .eUmynd .nav-title {
        display: inline-block;
        font: var(--font-label-2);
        margin-bottom: 3rem;
        -webkit-letter-spacing: 0.036rem;
        -moz-letter-spacing: 0.036rem;
        -ms-letter-spacing: 0.036rem;
        letter-spacing: 0.036rem;
    }

    /*!sc*/
    @media (max-width: 768px) {

        .eUmynd .nav-title-link,
        .eUmynd .nav-title {
            font: var(--font-label-4-light);
            margin-bottom: 0;
        }

        .eUmynd .nav-title-link .sc-fb16d8ea-0,
        .eUmynd .nav-title .sc-fb16d8ea-0 {
            display: inline-block;
        }
    }

    /*!sc*/
    .eUmynd .nav-list {
        font: var(--font-label-2);
        opacity: 50%;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .nav-list {
            -webkit-letter-spacing: 0.04rem;
            -moz-letter-spacing: 0.04rem;
            -ms-letter-spacing: 0.04rem;
            letter-spacing: 0.04rem;
        }
    }

    /*!sc*/
    .eUmynd .nav-list li {
        margin-bottom: 0.9rem;
    }

    /*!sc*/
    .eUmynd .site-meta {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        gap: var(--spacing-base);
    }

    /*!sc*/
    .eUmynd .site-meta .nav-inner-wrapper {
        width: auto;
    }

    /*!sc*/
    @media (max-width: 960px) {
        .eUmynd .site-meta .nav-inner-wrapper {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: 5rem;
            max-width: 120rem;
            width: 65rem;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .site-meta .nav-inner-wrapper {
            width: 100%;
        }
    }

    /*!sc*/
    @media (max-width: 1300px) {
        .eUmynd .site-meta {
            -webkit-align-items: end;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: end;
        }
    }

    /*!sc*/
    .eUmynd .contact-meta {
        font-size: var(--font-size-label-2);
        font-style: normal;
        white-space: nowrap;
    }

    /*!sc*/
    @media (max-width: 1300px) {
        .eUmynd .contact-meta {
            white-space: normal;
            text-align: right;
            line-height: 1.3;
        }

        .eUmynd .contact-meta .pipe {
            display: none;
        }

        .eUmynd .contact-meta .mobile-line {
            display: block;
            white-space: nowrap;
        }
    }

    /*!sc*/
    @media (max-width: 960px) {
        .eUmynd .contact-meta {
            width: 65rem;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .contact-meta {
            text-align: center;
            width: 100%;
        }
    }

    /*!sc*/
    .eUmynd .sub-nav-list {
        margin-top: 1rem;
    }

    /*!sc*/
    .eUmynd .sub-nav-link:before {
        content: "";
        display: inline-block;
        width: 0.5em;
        height: 0.5em;
        border-left: 1px solid currentColor;
        border-bottom: 1px solid currentColor;
        margin-right: 0.3em;
        vertical-align: middle;
        -webkit-transform: translateY(-0.25em);
        -ms-transform: translateY(-0.25em);
        transform: translateY(-0.25em);
    }

    /*!sc*/
    .eUmynd .apps-store-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        gap: var(--spacing-sm);
        width: 100%;
    }

    /*!sc*/
    @media (min-width: 769px) and (max-width: 1300px) {
        .eUmynd .apps-store-wrapper {
            margin-bottom: -4.5rem;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .apps-store-wrapper {
            gap: var(--spacing-xs);
        }
    }

    /*!sc*/
    .eUmynd .app-store-button {
        display: inline-block;
        width: 128px;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eUmynd .app-store-button {
            width: 100%;
        }
    }

    /*!sc*/
    data-styled.g317[id="sc-fb16d8ea-2"] {
        content: "eUmynd,";
    }

    /*!sc*/
    .exGBeR {
        margin-bottom: 0.6em;
    }

    /*!sc*/
    .exGBeR.inline {
        float: left;
    }

    /*!sc*/
    .exGBeR.fine-print {
        opacity: 0.5;
    }

    /*!sc*/
    .exGBeR.text-right {
        text-align: right;
    }

    /*!sc*/
    .exGBeR.text-center {
        text-align: center;
    }

    /*!sc*/
    .exGBeR.text-left {
        text-align: left;
    }

    /*!sc*/
    data-styled.g318[id="sc-6e48539f-0"] {
        content: "exGBeR,";
    }

    /*!sc*/
    .fWJJtW {
        margin-bottom: 1.3em;
    }

    /*!sc*/
    .fWJJtW.text-base {
        font-size: var(--font-size-body);
        line-height: 120%;
        -webkit-letter-spacing: -0.02em;
        -moz-letter-spacing: -0.02em;
        -ms-letter-spacing: -0.02em;
        letter-spacing: -0.02em;
    }

    /*!sc*/
    .fWJJtW.text-right {
        text-align: right;
    }

    /*!sc*/
    .fWJJtW.text-center {
        text-align: center;
    }

    /*!sc*/
    .fWJJtW.text-left {
        text-align: left;
    }

    /*!sc*/
    .fWJJtW.fine-print {
        opacity: 0.5;
    }

    /*!sc*/
    .fWJJtW.inline {
        float: left;
    }

    /*!sc*/
    .fWJJtW a {
        color: blue;
        -webkit-text-decoration: underline;
        text-decoration: underline;
    }

    /*!sc*/
    .fWJJtW a:hover {
        color: rebeccapurple;
    }

    /*!sc*/
    data-styled.g319[id="sc-e6679e59-0"] {
        content: "fWJJtW,";
    }

    /*!sc*/
    .hzuLcl.block-image {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: var(--spacing-sm);
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        gap: 2rem;
    }

    /*!sc*/
    .hzuLcl.block-image.block-center {
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    /*!sc*/
    .hzuLcl.block-image.block-right {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    /*!sc*/
    .hzuLcl.block-image-nowrap {
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    /*!sc*/
    .hzuLcl figure {
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        position: relative;
        margin: var(--spacing-base) 0;
    }

    /*!sc*/
    .hzuLcl figure iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /*!sc*/
    @media (max-width: 480px) {
        .hzuLcl figure {
            margin: var(--spacing-sm) 0;
        }
    }

    /*!sc*/
    .hzuLcl hr {
        margin: var(--spacing-base) 0;
    }

    /*!sc*/
    .hzuLcl a:not(.button) {
        color: var(--color-highlight);
        -webkit-text-decoration: underline;
        text-decoration: underline;
    }

    /*!sc*/
    .hzuLcl a:not(.button):hover {
        color: var(--color-highlight-light);
    }

    /*!sc*/
    data-styled.g320[id="sc-f087927f-0"] {
        content: "hzuLcl,";
    }

    /*!sc*/
    .jekIDM {
        background-color: red;
        font-weight: bold;
    }

    /*!sc*/
    .jekIDM>h2 {
        background-color: red;
    }

    /*!sc*/
    data-styled.g321[id="sc-f087927f-1"] {
        content: "jekIDM,";
    }

    /*!sc*/
    .eZKHBN {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding-bottom: 25vh;
    }

    /*!sc*/
    .eZKHBN .top {
        position: relative;
        margin: 34rem 0 -49vh calc(20rem + var(--rem-scale-viewport-half-excess));
        color: var(--color-white);
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eZKHBN .top {
            margin: 8.7rem 2rem -42vh 2rem;
        }
    }

    /*!sc*/
    .eZKHBN .top h4 {
        font-size: 9.6rem;
        font-style: normal;
        font-weight: 250;
        line-height: 100%;
        -webkit-letter-spacing: -0.384rem;
        -moz-letter-spacing: -0.384rem;
        -ms-letter-spacing: -0.384rem;
        letter-spacing: -0.384rem;
        max-width: 81rem;
        margin-bottom: 6rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eZKHBN .top h4 {
            font-size: 4.8rem;
            font-style: normal;
            font-weight: 350;
            line-height: 105%;
            -webkit-letter-spacing: -0.192rem;
            -moz-letter-spacing: -0.192rem;
            -ms-letter-spacing: -0.192rem;
            letter-spacing: -0.192rem;
            max-width: 33.5rem;
            margin-bottom: 2rem;
        }
    }

    /*!sc*/
    .eZKHBN .top .text-base {
        font-size: 2.4rem;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        -webkit-letter-spacing: -0.048rem;
        -moz-letter-spacing: -0.048rem;
        -ms-letter-spacing: -0.048rem;
        letter-spacing: -0.048rem;
        max-width: 28.2rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eZKHBN .top .text-base {
            font-size: 1.8rem;
            font-style: normal;
            font-weight: 400;
            line-height: 120%;
            -webkit-letter-spacing: -0.036rem;
            -moz-letter-spacing: -0.036rem;
            -ms-letter-spacing: -0.036rem;
            letter-spacing: -0.036rem;
            max-width: 19.6rem;
        }
    }

    /*!sc*/
    .eZKHBN .carousel {
        position: relative;
    }

    /*!sc*/
    data-styled.g328[id="sc-f21e8154-0"] {
        content: "eZKHBN,";
    }

    /*!sc*/
    .kYpEBV {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    /*!sc*/
    data-styled.g329[id="sc-f21e8154-1"] {
        content: "kYpEBV,";
    }

    /*!sc*/
    .donSPk {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        pointer-events: none;
    }

    /*!sc*/
    data-styled.g330[id="sc-f21e8154-2"] {
        content: "donSPk,";
    }

    /*!sc*/
    .fQPqZY {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-clip-path: inset(0 0);
        clip-path: inset(0 0);
    }

    /*!sc*/
    data-styled.g331[id="sc-f21e8154-3"] {
        content: "fQPqZY,";
    }

    /*!sc*/
    .fFxx {
        position: relative;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
    }

    /*!sc*/
    data-styled.g332[id="sc-f21e8154-4"] {
        content: "fFxx,";
    }

    /*!sc*/
    .uHnoO {
        width: 100%;
        text-align: right;
        padding-right: calc(5rem + var(--rem-scale-viewport-half-excess));
        margin: 3rem 0;
        color: var(--color-white);
        opacity: 0.5;
        -webkit-transition: 0.3s ease opacity;
        transition: 0.3s ease opacity;
    }

    /*!sc*/
    .uHnoO.active {
        opacity: 1;
    }

    /*!sc*/
    .uHnoO:first-child {
        margin-top: 50vh;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .uHnoO {
            padding-right: 2.7rem;
            margin: 2rem 0;
            line-height: 1em;
        }
    }

    /*!sc*/
    data-styled.g333[id="sc-f21e8154-5"] {
        content: "uHnoO,";
    }

    /*!sc*/
    .jGuHxB {
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        opacity: 0;
        -webkit-transition: 0.5s ease opacity;
        transition: 0.5s ease opacity;
    }

    /*!sc*/
    .jGuHxB.active {
        opacity: 1;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .jGuHxB {
            height: 100vh;
        }
    }

    /*!sc*/
    .jGuHxB::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        background: linear-gradient(to bottom,
                rgba(0, 0, 0, 0) 50%,
                rgba(0, 0, 0, 0.35) 100%);
    }

    /*!sc*/
    .jGuHxB>video,
    .jGuHxB>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /*!sc*/
    data-styled.g334[id="sc-f21e8154-6"] {
        content: "jGuHxB,";
    }

    /*!sc*/
    .fMybcq {
        position: relative;
        width: 100%;
        overflow: hidden;
        min-height: clamp(50vw, 100vh, 70vw);
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fMybcq {
            min-height: max(100vh, 150vw);
        }
    }

    /*!sc*/
    .fMybcq .content {
        position: relative;
        width: 100%;
        min-height: clamp(20vw, 70vh, 60vw);
        padding: max(100vh - 90vw, 17rem) max(env(safe-area-inset-right),
                calc(5rem + var(--rem-scale-viewport-half-excess))) 5rem max(env(safe-area-inset-left),
                calc(5rem + var(--rem-scale-viewport-half-excess)));
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fMybcq .content {
            padding: 14rem max(env(safe-area-inset-right), 2rem) calc(2rem + var(--browser-chrome-height)) max(env(safe-area-inset-right), 2rem);
            min-height: 100vh;
        }
    }

    /*!sc*/
    .fMybcq .background {
        width: 100%;
        height: calc(100% + 12rem);
        position: absolute;
        left: 0;
        top: 0;
    }

    /*!sc*/
    .fMybcq .background>img {
        display: block;
        object-fit: cover;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
    }

    /*!sc*/
    .fMybcq .background::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        background: rgba(0, 0, 0, 0.25);
    }

    /*!sc*/
    .fMybcq .title {
        position: relative;
        width: 100%;
    }

    /*!sc*/
    .fMybcq .title h1 {
        color: var(--color-white);
        margin-bottom: 4rem;
        font
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fMybcq .title h1 {
            margin-bottom: 5rem;
        }
    }

    /*!sc*/
    .fMybcq .arrow {
        width: 7rem;
        height: 7rem;
        position: absolute;
        right: calc(5rem + var(--rem-scale-viewport-half-excess));
        bottom: 5rem;
        color: var(--color-white);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: none;
        padding: 0;
        margin: 0;
        border-radius: 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fMybcq .arrow {
            width: 3.8rem;
            height: 3.8rem;
            right: 2rem;
            bottom: 2.2rem;
        }
    }

    /*!sc*/
    data-styled.g342[id="sc-ed2cd4bb-0"] {
        content: "fMybcq,";
    }

    /*!sc*/
    .gHwEHr {
        max-width: 41.6rem;
        color: var(--color-white);
    }

    /*!sc*/
    @media (max-width: 768px) {
        .gHwEHr {
            position: relative;
            bottom: auto;
            left: auto;
            max-width: 26.9rem;
        }
    }

    /*!sc*/
    .gHwEHr .text-base {
        font-size: 2.4rem;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        -webkit-letter-spacing: -0.048rem;
        -moz-letter-spacing: -0.048rem;
        -ms-letter-spacing: -0.048rem;
        letter-spacing: -0.048rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .gHwEHr .text-base {
            font-size: 1.6rem;
            font-style: normal;
            font-weight: 400;
            line-height: 120%;
            -webkit-letter-spacing: -0.016rem;
            -moz-letter-spacing: -0.016rem;
            -ms-letter-spacing: -0.016rem;
            letter-spacing: -0.016rem;
        }
    }

    /*!sc*/
    data-styled.g343[id="sc-ed2cd4bb-1"] {
        content: "gHwEHr,";
    }

    /*!sc*/
    .kXgRDu {
        position: relative;
        width: 100%;
        padding: 21.2rem calc(27.8rem + var(--rem-scale-viewport-half-excess)) 21.2rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        gap: 15.6rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .kXgRDu {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 7rem;
            padding: 11.45rem 2rem;
        }
    }

    /*!sc*/
    .kXgRDu .video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    /*!sc*/
    .kXgRDu .video::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: "";
        display: block;
        background: currentColor;
        opacity: 0.15;
    }

    /*!sc*/
    .kXgRDu .video>video,
    .kXgRDu .video>img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /*!sc*/
    data-styled.g360[id="sc-3de513f2-0"] {
        content: "kXgRDu,";
    }

    /*!sc*/
    .jwzgby {
        background: var(--color-white);
        width: 45.2rem;
        padding: 7rem 4rem 10rem;
        border-radius: 4rem;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    /*!sc*/
    .jwzgby .logomark {
        width: 9rem;
        height: 9rem;
        margin-bottom: 2rem;
    }

    /*!sc*/
    .jwzgby .text-editor {
        text-align: center;
    }

    /*!sc*/
    .jwzgby .text-editor h4 {
        font-size: 3.4rem;
        font-style: normal;
        font-weight: 400;
        line-height: 120%;
        -webkit-letter-spacing: -0.136rem;
        -moz-letter-spacing: -0.136rem;
        -ms-letter-spacing: -0.136rem;
        letter-spacing: -0.136rem;
        padding: 0 1rem;
        margin-bottom: 5rem;
        text-align: center;
    }

    /*!sc*/
    .jwzgby .text-editor>div {
        margin-bottom: 3rem;
    }

    /*!sc*/
    .jwzgby .text-editor>div>p {
        color: #959595;
        font-size: 1.8rem;
        font-style: normal;
        font-weight: 350;
        line-height: 110%;
        -webkit-letter-spacing: -0.036rem;
        -moz-letter-spacing: -0.036rem;
        -ms-letter-spacing: -0.036rem;
        letter-spacing: -0.036rem;
        margin-bottom: 5rem;
    }

    /*!sc*/
    .jwzgby .text-editor>div>p>a {
        color: var(--color-black);
    }

    /*!sc*/
    .jwzgby .text-editor>div>div>a {
        width: 100%;
    }

    /*!sc*/
    .jwzgby .app-store {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    /*!sc*/
    .jwzgby .app-store .app-store-button {
        width: 12.8rem;
        height: 3.58rem;
    }

    /*!sc*/
    .jwzgby .app-store .app-store-button:first-child {
        margin-right: 1rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .jwzgby {
            width: 35rem;
            padding: 6rem 4rem;
        }

        .jwzgby .text-editor h4 {
            padding: 0;
            font-size: 2.4rem;
            font-style: normal;
            font-weight: 400;
            line-height: 120%;
            -webkit-letter-spacing: -0.048rem;
            -moz-letter-spacing: -0.048rem;
            -ms-letter-spacing: -0.048rem;
            letter-spacing: -0.048rem;
            margin-bottom: 4rem;
        }

        .jwzgby .text-editor>p {
            font-size: 1.4rem;
            font-style: normal;
            font-weight: 400;
            line-height: 120%;
            -webkit-letter-spacing: -0.028rem;
            -moz-letter-spacing: -0.028rem;
            -ms-letter-spacing: -0.028rem;
            letter-spacing: -0.028rem;
            margin-bottom: 4rem;
        }

        .jwzgby .app-store .app-store-button {
            width: 11.6rem;
            height: 3.26rem;
        }
    }

    /*!sc*/
    data-styled.g362[id="sc-3de513f2-2"] {
        content: "jwzgby,";
    }

    /*!sc*/
    .dgscJZ.mobile-only {
        display: none;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .dgscJZ.desktop-only {
            display: none;
        }

        .dgscJZ.mobile-only {
            display: block;
        }
    }

    /*!sc*/
    data-styled.g369[id="sc-bc160cdd-0"] {
        content: "dgscJZ,";
    }

    /*!sc*/
    .joKlX {
        position: relative;
        width: 100%;
    }

    /*!sc*/
    .joKlX .split-layout-adjust {
        visibility: hidden;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .joKlX .split-layout-adjust {
            display: none;
        }
    }

    /*!sc*/
    .joKlX .split-layout-adjust>div {
        width: 100%;
    }

    /*!sc*/
    .joKlX .split-layout-adjust>div>h2 {
        position: relative;
        height: auto;
    }

    /*!sc*/
    .joKlX .split-layout-adjust>div>h2 span:last-child {
        display: none;
    }

    /*!sc*/
    .joKlX .split-layout-adjust>div>div {
        position: relative;
    }

    /*!sc*/
    data-styled.g370[id="sc-bc160cdd-1"] {
        content: "joKlX,";
    }

    /*!sc*/
    .iwJvfq {
        overflow: hidden;
        padding: 23rem calc(15rem + var(--rem-scale-viewport-half-excess));
    }

    /*!sc*/
    @media (max-width: 768px) {
        .iwJvfq {
            padding: 12.6rem max(env(safe-area-inset-right), 2rem) 12.6rem max(env(safe-area-inset-left), 2rem) !important;
            margin: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
    }

    /*!sc*/
    .lLudu {
        overflow: hidden;
        padding: 16rem calc(17rem + var(--rem-scale-viewport-half-excess));
    }

    /*!sc*/
    .lLudu.wide {
        padding: 16rem max(env(safe-area-inset-right),
                calc(5rem + var(--rem-scale-viewport-half-excess))) 16rem max(env(safe-area-inset-left),
                calc(5rem + var(--rem-scale-viewport-half-excess)));
    }

    /*!sc*/
    @media (max-width: 768px) {
        .lLudu {
            padding: 12.6rem max(env(safe-area-inset-right), 2rem) 12.6rem max(env(safe-area-inset-left), 2rem) !important;
            margin: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
    }

    /*!sc*/
    .iZoUUF {
        overflow: hidden;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-align-items: flex-end;
        -webkit-box-align: flex-end;
        -ms-flex-align: flex-end;
        align-items: flex-end;
        padding: 25rem calc(22rem + var(--rem-scale-viewport-half-excess));
    }

    /*!sc*/
    @media (max-width: 768px) {
        .iZoUUF {
            padding: 12.6rem max(env(safe-area-inset-right), 2rem) 12.6rem max(env(safe-area-inset-left), 2rem) !important;
            margin: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }
    }

    /*!sc*/
    data-styled.g371[id="sc-bc160cdd-2"] {
        content: "iwJvfq,lLudu,iZoUUF,";
    }

    /*!sc*/
    .lkFFgr {
        line-height: 1;
        -webkit-letter-spacing: -0.06em;
        -moz-letter-spacing: -0.06em;
        -ms-letter-spacing: -0.06em;
        letter-spacing: -0.06em;
        margin-bottom: 0.82em;
    }

    /*!sc*/
    .lkFFgr span {
        word-wrap: break-word;
    }

    /*!sc*/
    .lkFFgr::after {
        content: "";
        display: block;
        width: 0.8em;
        height: calc(var(--font-size-h2));
        float: left;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: flex-end;
        -webkit-box-align: flex-end;
        -ms-flex-align: flex-end;
        align-items: flex-end;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .lkFFgr::after {
            content: none;
        }
    }

    /*!sc*/
    .lkFFgr span {
        min-width: 50%;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .lkFFgr span {
            min-width: 100%;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .lkFFgr {
            margin-bottom: 4rem;
            margin-right: 0;
            text-align: left;
        }

        .lkFFgr span {
            text-indent: 0 !important;
            display: inline;
        }
    }

    /*!sc*/
    .exsFKt {
        line-height: 1;
        -webkit-letter-spacing: -0.06em;
        -moz-letter-spacing: -0.06em;
        -ms-letter-spacing: -0.06em;
        letter-spacing: -0.06em;
        margin-bottom: 0.41em;
    }

    /*!sc*/
    .exsFKt span {
        word-wrap: break-word;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .exsFKt {
            margin-bottom: 4rem;
            margin-right: 0;
            text-align: left;
        }

        .exsFKt span {
            text-indent: 0 !important;
            display: inline;
        }
    }

    /*!sc*/
    .hGtFNR {
        line-height: 1;
        -webkit-letter-spacing: -0.06em;
        -moz-letter-spacing: -0.06em;
        -ms-letter-spacing: -0.06em;
        letter-spacing: -0.06em;
        margin-bottom: 0.59em;
        margin-right: 10rem;
        -webkit-flex: 2.4 2.4 0;
        -ms-flex: 2.4 2.4 0;
        flex: 2.4 2.4 0;
        text-align: right;
    }

    /*!sc*/
    .hGtFNR span {
        word-wrap: break-word;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .hGtFNR {
            -webkit-flex: unset;
            -ms-flex: unset;
            flex: unset;
            text-align: right;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .hGtFNR {
            margin-bottom: 4rem;
            margin-right: 0;
            text-align: left;
        }

        .hGtFNR span {
            text-indent: 0 !important;
            display: inline;
        }
    }

    /*!sc*/
    data-styled.g372[id="sc-bc160cdd-3"] {
        content: "lkFFgr,exsFKt,hGtFNR,";
    }

    /*!sc*/
    .houhBn>*:last-child,
    .houhBn .text-base:last-child {
        margin-bottom: 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .houhBn .text-base {
            -webkit-letter-spacing: -0.03rem;
            -moz-letter-spacing: -0.03rem;
            -ms-letter-spacing: -0.03rem;
            letter-spacing: -0.03rem;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .houhBn .strapi-link.button {
            padding: 1.3rem 1.4rem;
        }
    }

    /*!sc*/
    .houhBn .heading {
        font-size: 3.6rem;
        font-style: normal;
        font-weight: 400;
        line-height: 100%;
        -webkit-letter-spacing: -0.072rem;
        -moz-letter-spacing: -0.072rem;
        -ms-letter-spacing: -0.072rem;
        letter-spacing: -0.072rem;
        margin-bottom: 0.8em;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .houhBn .heading {
            font-size: 3rem;
            font-style: normal;
            font-weight: 400;
            line-height: 100%;
            -webkit-letter-spacing: -0.06rem;
            -moz-letter-spacing: -0.06rem;
            -ms-letter-spacing: -0.06rem;
            letter-spacing: -0.06rem;
            margin-bottom: 0.6em;
        }
    }

    /*!sc*/
    data-styled.g374[id="sc-bc160cdd-5"] {
        content: "houhBn,";
    }

    /*!sc*/
    .eWLaxK {
        display: grid;
        grid-auto-columns: 0.65fr;
        grid-auto-flow: row;
        -webkit-column-gap: 10rem;
        column-gap: 10rem;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0;
    }

    /*!sc*/
    .eWLaxK>.sc-bc160cdd-5:not(:last-child) {
        margin-bottom: 4rem;
    }

    /*!sc*/
    .eWLaxK.single {
        grid-auto-columns: 0.52fr;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eWLaxK {
            grid-auto-columns: 0.9fr !important;
            grid-auto-flow: row;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -ms-flex-pack: start;
            justify-content: start;
            margin-bottom: 0;
            margin-top: 0;
            gap: 0;
            float: none;
            position: relative;
            bottom: auto;
        }

        .eWLaxK>.sc-bc160cdd-5 {
            margin-bottom: 4rem;
            left: 0 !important;
            margin-top: 0 !important;
        }
    }

    /*!sc*/
    .eA-DXWS {
        display: grid;
        grid-auto-columns: 0.65fr;
        grid-auto-flow: column;
        -webkit-column-gap: 10rem;
        column-gap: 10rem;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 12rem;
    }

    /*!sc*/
    .eA-DXWS.single {
        grid-auto-columns: 0.52fr;
    }

    /*!sc*/
    .eA-DXWS.wide {
        grid-auto-columns: 1fr;
    }

    /*!sc*/
    .eA-DXWS.wide:not(.cols) {
        max-width: 50rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .eA-DXWS {
            grid-auto-columns: 0.9fr !important;
            grid-auto-flow: row;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -ms-flex-pack: start;
            justify-content: start;
            margin-bottom: 0;
            margin-top: 0;
            gap: 0;
            float: none;
            position: relative;
            bottom: auto;
        }

        .eA-DXWS>.sc-bc160cdd-5 {
            margin-bottom: 4rem;
            left: 0 !important;
            margin-top: 0 !important;
        }
    }

    /*!sc*/
    .jYEFCW {
        display: grid;
        -webkit-flex: 1 1 0;
        -ms-flex: 1 1 0;
        flex: 1 1 0;
        grid-auto-flow: row;
        margin-bottom: 10rem;
    }

    /*!sc*/
    .jYEFCW>.sc-bc160cdd-5:not(:last-child) {
        margin-bottom: 4rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .jYEFCW {
            grid-auto-columns: 0.9fr !important;
            grid-auto-flow: row;
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -ms-flex-pack: start;
            justify-content: start;
            margin-bottom: 0;
            margin-top: 0;
            gap: 0;
            float: none;
            position: relative;
            bottom: auto;
        }

        .jYEFCW>.sc-bc160cdd-5 {
            margin-bottom: 4rem;
            left: 0 !important;
            margin-top: 0 !important;
        }
    }

    /*!sc*/
    data-styled.g375[id="sc-bc160cdd-6"] {
        content: "eWLaxK,eA-DXWS,jYEFCW,";
    }

    /*!sc*/
    .gDcGbm {
        overflow: hidden;
        border-radius: 4rem;
    }

    /*!sc*/
    .gDcGbm.transparent {
        border-radius: 0;
    }

    /*!sc*/
    .gDcGbm>* {
        width: 100%;
        height: auto !important;
    }

    /*!sc*/
    .gDcGbm:last-child {
        margin-top: 20rem;
        margin-left: -3.7rem;
    }

    /*!sc*/
    .gDcGbm.single.tall {
        width: 43rem;
    }

    /*!sc*/
    .gDcGbm.single:last-child {
        margin-top: 0;
        margin-left: 0;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .gDcGbm {
            border-radius: 3.2rem;
        }

        .gDcGbm.single {
            width: 35rem !important;
        }

        .gDcGbm:last-child {
            margin-top: 0;
            margin-left: 0;
        }

        .gDcGbm:nth-child(2) {
            margin-top: 2.4rem;
        }
    }

    /*!sc*/
    data-styled.g376[id="sc-bc160cdd-7"] {
        content: "gDcGbm,";
    }

    /*!sc*/
    .jSzbRL {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        max-width: 70rem;
        float: left;
        clear: left;
        margin-left: 8rem;
        margin-right: 12rem;
        min-height: 85rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .jSzbRL {
            float: none;
            margin-left: 0 !important;
            margin-right: 0;
            margin-bottom: 0 !important;
            min-height: 0;
            max-width: none !important;
            position: relative;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
            width: 100%;
            display: block;
        }
    }

    /*!sc*/
    .frvkIR {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        max-width: 70rem;
        float: right;
        margin-left: 8rem;
    }

    /*!sc*/
    .frvkIR.wide {
        max-width: 95rem;
        margin-bottom: 10rem;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .frvkIR {
            float: none;
            margin-left: 0 !important;
            margin-right: 0;
            margin-bottom: 0 !important;
            min-height: 0;
            max-width: none !important;
            position: relative;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
            width: 100%;
            display: block;
        }
    }

    /*!sc*/
    .fsjKUz {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        max-width: 70rem;
        float: none;
        width: 100%;
        max-width: none;
        -webkit-order: 2;
        -ms-flex-order: 2;
        order: 2;
    }

    /*!sc*/
    .fsjKUz>.sc-bc160cdd-7,
    .fsjKUz>.sc-bc160cdd-7.wide img {
        width: 100% !important;
    }

    /*!sc*/
    .fsjKUz>.sc-bc160cdd-7:nth-child(2) {
        margin-left: 6.8rem;
        margin-top: 0;
    }

    /*!sc*/
    .fsjKUz>.sc-bc160cdd-7.tall:not(.single) {
        width: 30.1% !important;
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fsjKUz>.sc-bc160cdd-7.tall:not(.single) {
            width: 100% !important;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {

        .fsjKUz>.sc-bc160cdd-7,
        .fsjKUz>.sc-bc160cdd-7.wide,
        .fsjKUz>.sc-bc160cdd-7.tall {
            width: 100% !important;
            margin-left: 0;
            margin-bottom: 4rem;
        }

        .fsjKUz>.sc-bc160cdd-7:last-child,
        .fsjKUz>.sc-bc160cdd-7.wide:last-child,
        .fsjKUz>.sc-bc160cdd-7.tall:last-child {
            margin-bottom: 0;
        }
    }

    /*!sc*/
    @media (max-width: 768px) {
        .fsjKUz {
            float: none;
            margin-left: 0 !important;
            margin-right: 0;
            margin-bottom: 0 !important;
            min-height: 0;
            max-width: none !important;
            position: relative;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
            width: 100%;
            display: block;
        }
    }

    /*!sc*/
    data-styled.g377[id="sc-bc160cdd-8"] {
        content: "jSzbRL,frvkIR,fsjKUz,";
    }

    /*!sc*/
    .cxQBOU {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    /*!sc*/
    data-styled.g378[id="sc-bc160cdd-9"] {
        content: "cxQBOU,";
    }

    /*!sc*/
    .iitCdJ {
        min-height: 100vh;
    }

    /*!sc*/
    data-styled.g388[id="sc-a41b65c2-0"] {
        content: "iitCdJ,";
    }

    .search-div{
        border-radius : 25px;
        background-color : black;
    }
    .borderend{
        color:white;
        background-color:white;
        padding-top:5px;
        padding-bottom:5px;
    }
    .search-div select {
        background-color:black;
        color:white;
    }
    /*!sc*/

</style>

<main id="main-content" class="sc-a41b65c2-0 iitCdJ">
    <div class="sc-fc3e0d65-0 izRDca creators.creator-hero-1" data-theme="dark" id="home">
        <div class="container-inner">
            <div>
                <div data-hydra='{"type":"CreatorHero","variation":"podcast","colors":["#242f32","#b8a998","#4f6466","#8c765d"]}' class="sc-ed2cd4bb-0 fMybcq">
                    <div class="background">
                        <img src="https://img.freepik.com/free-photo/nightlife-celebration-multi-colored-bar-establishment-generative-ai_188544-12375.jpg" />
                    </div>
                    <div class="content">
                        <div class="title">
                            <h1 class="text-right">
                                <b>
                                    <span style="font-size:30px;">THE </span><span style="font-size:50px;">PATRONN </span><span style="font-size:30px;">PASS</span>
                                </b>
                                
                            </h1>
                            <form>
                                <div class="float-right mr-5 p-4 search-div">
                                    <button type="submit">
                                        <i class="px-4 text-white fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <select class="px-4">
                                        <option>Country</option>
                                        <option>Country</option>
                                        <option>Country</option>
                                    </select>
                                    <span class="borderend">|</span>
                                    <select class="px-4">
                                        <option>Country</option>
                                        <option>Country</option>
                                        <option>Country</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="sc-ed2cd4bb-1 gHwEHr">
                            <div class="sc-f087927f-0 hzuLcl block">
                                <p class="sc-e6679e59-0 fWJJtW text-left text-base">
                                    Connect with your customers, share your work directly
                                    with audiences, and earn income beyond ad revenue.
                                </p>
                                <div class="sc-42b34c08-0 odNiZ">
                                    <a href="https://patronpass.bar/signup" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC sc-5de05abd-0 heSnOH primary button strapi-link">
                                        <div data-label="Create on Patreonpass" class="label-wrapper">
                                            <span class="label">Create on Patreonpass</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <button class="arrow" aria-label="Scroll down to next section">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 77" class="icon">
                                <path fill="currentColor" d="M43.5 0v59.244l27.34-26.955 6.319 6.408-35 34.507L39 76.319l-3.16-3.115-35-34.507 6.319-6.408L34.5 59.244V0h9z">
                                </path>
                            </svg>
                        </button> --}}

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-fc3e0d65-0 izRDca marketing.floating-product-ui-3" data-theme="light" id="Get_to_know_your_customers">
        <div class="container-inner">
            <div id="get-to-know-your-listeners" class="sc-bc160cdd-0 dgscJZ">
                <div style="
                  background-color: #cba37f;
                  background-image: radial-gradient(
                      87% 113% at 79% 40%,
                      rgba(255, 218, 180, 0.3) -10%,
                      rgba(255, 218, 180, 0.1) 40%,
                      rgba(255, 218, 180, 0) 60%
                    ),
                    radial-gradient(
                      104% 60% at 82% -15%,
                      rgba(174, 137, 102, 0.8) 0%,
                      rgba(174, 137, 102, 0) 80%
                    ),
                    radial-gradient(
                      173% 173% at -143% 115%,
                      rgba(174, 137, 102, 1) 0%,
                      rgba(174, 137, 102, 1) 70%,
                      rgba(174, 137, 102, 0) 95%
                    ),
                    linear-gradient(
                      255deg,
                      rgba(255, 218, 180, 0) 0%,
                      rgba(255, 218, 180, 0) 70%,
                      rgba(255, 218, 180, 0.6) 110%
                    ),
                    radial-gradient(
                      48% 56% at 101% 78%,
                      rgba(231, 190, 153, 1) 0%,
                      rgba(231, 190, 153, 0) 100%
                    ),
                    radial-gradient(
                      26% 39% at 74% 111%,
                      rgba(231, 190, 153, 1) 0%,
                      rgba(231, 190, 153, 0) 90%
                    );
                " data-hydra='{"type":"GradientBackground","colors":["#ae8966","#cba37f","#e7be99","#ffdab4"]}' class="sc-ded3217a-0 dRRdTF sc-bc160cdd-9 cxQBOU"></div>
                <div data-hydra='{"type":"FloatingProductUI","aspects":[0.46072684642438455]}' class="sc-bc160cdd-1 joKlX">
                    <div class="sc-bc160cdd-2 iwJvfq">
                        <div class="sc-bc160cdd-8 jSzbRL single">
                            <div class="sc-bc160cdd-7 gDcGbm tall single transparent">
                                <img src="../../c15.patreon.com/thumbnail_Mobile_Community_3_fd9bd5a72e.png" alt="Real-time Chats" width="393" height="853" loading="lazy" decoding="async" srcset="
                          https://c15.patreon.com/thumbnail_Mobile_Community_3_fd9bd5a72e.png  72w,
                          https://c15.patreon.com/xsmall_Mobile_Community_3_fd9bd5a72e.png    177w,
                          https://c15.patreon.com/small_Mobile_Community_3_fd9bd5a72e.png     230w,
                          https://c15.patreon.com/medium_Mobile_Community_3_fd9bd5a72e.png    346w,
                          https://c15.patreon.com/large_Mobile_Community_3_fd9bd5a72e.png     461w,
                          https://c15.patreon.com/wxgaplus_Mobile_Community_3_fd9bd5a72e.png  663w,
                          https://c15.patreon.com/Mobile_Community_3_fd9bd5a72e.png           786w
                        " style="width: 39.3rem; height: 85.3rem" sizes="(max-width: 768px) 100.769vw, 393px" />
                            </div>
                        </div>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-733803e9-0 kfSQeG sc-bc160cdd-3 lkFFgr">
                            <span>Get to know </span><span>your customers</span>
                        </h2>
                        <div class="sc-bc160cdd-6 eWLaxK single">
                            <div class="sc-bc160cdd-5 houhBn">
                                <div class="sc-f087927f-0 hzuLcl block">
                                    <p class="sc-e6679e59-0 fWJJtW text-left text-base">
                                        Hang out in real-time community group chats, stay
                                        close through DMs and comments, or even reach out
                                        directly over email. Explore fan profiles to get to
                                        know the people behind all the love.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-fc3e0d65-0 izRDca marketing.floating-product-ui-4" data-theme="light" id="Cut_through_the_noise">
        <div class="container-inner">
            <div id="cut-through-the-noise" class="sc-bc160cdd-0 dgscJZ">
                <div style="
                  background-color: #a5ad9e;
                  background-image: radial-gradient(
                      130% 100% at 41% 79%,
                      rgba(220, 229, 213, 0.3) -10%,
                      rgba(220, 229, 213, 0.1) 40%,
                      rgba(220, 229, 213, 0) 60%
                    ),
                    radial-gradient(
                      40% 120% at 85% 113%,
                      rgba(138, 147, 132, 0.8) 0%,
                      rgba(138, 147, 132, 0) 80%
                    ),
                    radial-gradient(
                      199% 199% at 107% -146%,
                      rgba(138, 147, 132, 1) 0%,
                      rgba(138, 147, 132, 1) 70%,
                      rgba(138, 147, 132, 0) 95%
                    ),
                    linear-gradient(
                      20deg,
                      rgba(220, 229, 213, 0) 0%,
                      rgba(220, 229, 213, 0) 70%,
                      rgba(220, 229, 213, 0.6) 110%
                    ),
                    radial-gradient(
                      65% 55% at -2% 76%,
                      rgba(192, 201, 185, 1) 0%,
                      rgba(192, 201, 185, 0) 100%
                    ),
                    radial-gradient(
                      45% 30% at -14% 34%,
                      rgba(192, 201, 185, 1) 0%,
                      rgba(192, 201, 185, 0) 90%
                    );
                " data-hydra='{"type":"GradientBackground","colors":["#8a9384","#a5ad9e","#c0c9b9","#dce5d5"]}' class="sc-ded3217a-0 dRRdTF sc-bc160cdd-9 cxQBOU"></div>
                <div data-hydra='{"type":"FloatingProductUI","aspects":[0.4612676056338028]}' class="sc-bc160cdd-1 joKlX">
                    <div class="sc-bc160cdd-2 lLudu">
                        <div class="sc-bc160cdd-8 frvkIR single">
                            <div class="sc-bc160cdd-7 gDcGbm tall single transparent">
                                <img src="https://patronpass.bar/public/img/barbbbbb.png" alt="Achewood" width="393" height="852" loading="lazy" decoding="async" "
                                        style=" width: 39.3rem; height: 85.2rem" sizes="(max-width: 768px) 100.769vw, 393px" />
                            </div>
                        </div>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-733803e9-0 kfSQeG sc-bc160cdd-3 exsFKt">
                            <span>Cut through </span><span>the noise</span>
                        </h2>
                        <div class="sc-bc160cdd-6 eA-DXWS single">
                            <div class="sc-bc160cdd-5 houhBn">
                                <div class="sc-f087927f-0 hzuLcl block">
                                    <p class="sc-e6679e59-0 fWJJtW text-left text-base">
                                        Connect with your community in a single, intimate
                                        space free of gatekeeping algorithms and distracting
                                        ads, knowing that everything you post will be sent
                                        directly to customers&#x27; feeds and inboxes, every
                                        time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-fc3e0d65-0 izRDca homepage.large-quote-and-title-2" data-theme="dark" id="Straight_Up_Sisters">
        <div class="container-inner">
            <div>
                <div class="sc-8441f2db-0 fDFVao light">
                    <div class="background">
                        <img src="../../c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0009_Layer_0_78634774f7.jpg" alt="Cafes full bleed image" width="3840" height="2160" loading="lazy" decoding="async" srcset="
                      https://c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0009_Layer_0_78634774f7.jpg  245w,
                      https://c15.patreon.com/small_Patreon_website_Module2_2x_wide_72dpi_0000s_0009_Layer_0_78634774f7.jpg      500w,
                      https://c15.patreon.com/medium_Patreon_website_Module2_2x_wide_72dpi_0000s_0009_Layer_0_78634774f7.jpg     750w,
                      https://c15.patreon.com/large_Patreon_website_Module2_2x_wide_72dpi_0000s_0009_Layer_0_78634774f7.jpg     1000w,
                      https://c15.patreon.com/Patreon_website_Module2_2x_wide_72dpi_0000s_0009_Layer_0_78634774f7.jpg           3840w
                    " style="background-color: #bfd5e8" sizes="177.8vw" />
                    </div>
                    <div class="title-spacer"></div>
                    <div class="title-wrapper"></div>
                    <p class="sc-8441f2db-2 dxDcsL"></p>
                    <h3 class="sc-d9f24904-0 eGGDVh sc-8441f2db-3 kXsiSG quotetext">
                        &quot;It&#x27;s been a game changer, having a direct line of
                        communication with our true followers and suppo<span class="sc-1f036cff-0 gNBMTT">rt</span>ers.&quot;
                    </h3>
                    <h3 class="sc-d9f24904-0 eGGDVh sc-8441f2db-4 bNXrId">
                        Straight Up Sisters
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-fc3e0d65-0 izRDca marketing.floating-product-ui-5" data-theme="light" id="More_ways_to_get_paid">
        <div class="container-inner">
            <div id="more-ways-to-get-paid" class="sc-bc160cdd-0 dgscJZ">
                <div style="
                  background-color: #de94bf;
                  background-image: radial-gradient(
                      101% 82% at 36% 23%,
                      rgba(255, 203, 248, 0.3) -10%,
                      rgba(255, 203, 248, 0.1) 40%,
                      rgba(255, 203, 248, 0) 60%
                    ),
                    radial-gradient(
                      76% 93% at -19% 29%,
                      rgba(193, 122, 164, 0.8) 0%,
                      rgba(193, 122, 164, 0) 80%
                    ),
                    radial-gradient(
                      155% 155% at 145% 231%,
                      rgba(193, 122, 164, 1) 0%,
                      rgba(193, 122, 164, 1) 70%,
                      rgba(193, 122, 164, 0) 95%
                    ),
                    linear-gradient(
                      156deg,
                      rgba(255, 203, 248, 0) 0%,
                      rgba(255, 203, 248, 0) 70%,
                      rgba(255, 203, 248, 0.6) 110%
                    ),
                    radial-gradient(
                      51% 43% at 70% -5%,
                      rgba(251, 175, 219, 1) 0%,
                      rgba(251, 175, 219, 0) 100%
                    ),
                    radial-gradient(
                      35% 28% at 107% 17%,
                      rgba(251, 175, 219, 1) 0%,
                      rgba(251, 175, 219, 0) 90%
                    );
                " data-hydra='{"type":"GradientBackground","colors":["#c17aa4","#de94bf","#fbafdb","#ffcbf8"]}' class="sc-ded3217a-0 dRRdTF sc-bc160cdd-9 cxQBOU"></div>
                <div data-hydra='{"type":"FloatingProductUI","aspects":[1.40625]}' class="sc-bc160cdd-1 joKlX">
                    <div class="sc-bc160cdd-2 iZoUUF wide">
                        <div class="sc-bc160cdd-8 fsjKUz single wide">
                            <div class="sc-bc160cdd-7 gDcGbm wide single transparent">
                                <img src="../../c15.patreon.com/thumbnail_Desktop_Shop_0c35f562b2.png" alt="KnowForSure Patreon page in desktop web browser" width="1080" height="768" loading="lazy" decoding="async" srcset="
                          https://c15.patreon.com/thumbnail_Desktop_Shop_0c35f562b2.png  219w,
                          https://c15.patreon.com/small_Desktop_Shop_0c35f562b2.png      500w,
                          https://c15.patreon.com/medium_Desktop_Shop_0c35f562b2.png     750w,
                          https://c15.patreon.com/large_Desktop_Shop_0c35f562b2.png     1000w,
                          https://c15.patreon.com/Desktop_Shop_0c35f562b2.png           2160w
                        " style="width: 108rem; height: 76.8rem" sizes="(max-width: 768px) 276.923vw, 1080px" />
                            </div>
                        </div>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-733803e9-0 kfSQeG sc-bc160cdd-3 hGtFNR">
                            <span>More ways </span><span>to get paid</span>
                        </h2>
                        <div class="sc-bc160cdd-6 jYEFCW single wide">
                            <div class="sc-bc160cdd-5 houhBn">
                                <div class="sc-f087927f-0 hzuLcl block">
                                    <p class="sc-e6679e59-0 fWJJtW text-left text-base">
                                        Not only can you earn recurring income on Patreon
                                        through paid membership, you can also sell bonus
                                        episodes, archived seasons, and more to all of your
                                        fans in your personal online shop.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-fc3e0d65-0 izRDca creators.creator-carousel-1" data-theme="dark"  id="Other_Cafes_on_Patreonpass">
        <div class="container-inner">
            <div id="meet-other-Cafes" class="sc-f21e8154-0 eZKHBN">
                <div style="
                  background-color: #dfc0ad;
                  background-image: radial-gradient(
                      124% 96% at 53% 80%,
                      rgba(255, 248, 229, 0.3) -10%,
                      rgba(255, 248, 229, 0.1) 40%,
                      rgba(255, 248, 229, 0) 60%
                    ),
                    radial-gradient(
                      38% 115% at 106% 96%,
                      rgba(195, 165, 147, 0.8) 0%,
                      rgba(195, 165, 147, 0) 80%
                    ),
                    radial-gradient(
                      191% 191% at 30% -153%,
                      rgba(195, 165, 147, 1) 0%,
                      rgba(195, 165, 147, 1) 70%,
                      rgba(195, 165, 147, 0) 95%
                    ),
                    linear-gradient(
                      -2deg,
                      rgba(255, 248, 229, 0) 0%,
                      rgba(255, 248, 229, 0) 70%,
                      rgba(255, 248, 229, 0.6) 110%
                    ),
                    radial-gradient(
                      62% 53% at 11% 93%,
                      rgba(252, 220, 201, 1) 0%,
                      rgba(252, 220, 201, 0) 100%
                    ),
                    radial-gradient(
                      43% 29% at -15% 59%,
                      rgba(252, 220, 201, 1) 0%,
                      rgba(252, 220, 201, 0) 90%
                    );
                " data-hydra='{"type":"GradientBackground","colors":["#c3a593","#dfc0ad","#fcdcc9","#fff8e5"],"targetLightness":85}' class="sc-ded3217a-0 dRRdTF sc-f21e8154-1 kYpEBV"></div>
                <div class="sc-f21e8154-2 donSPk">
                    <div class="sc-f21e8154-3 fQPqZY slide-0">
                        <div class="sc-f21e8154-6 jGuHxB">
                            <img src="../../c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0011_Layer_0_b75b7499a5.jpg" alt="2 Black Girls, 1 Rose image" width="3840" height="2160" loading="lazy" decoding="async" srcset="
                        https://c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0011_Layer_0_b75b7499a5.jpg  245w,
                        https://c15.patreon.com/small_Patreon_website_Module2_2x_wide_72dpi_0000s_0011_Layer_0_b75b7499a5.jpg      500w,
                        https://c15.patreon.com/medium_Patreon_website_Module2_2x_wide_72dpi_0000s_0011_Layer_0_b75b7499a5.jpg     750w,
                        https://c15.patreon.com/large_Patreon_website_Module2_2x_wide_72dpi_0000s_0011_Layer_0_b75b7499a5.jpg     1000w,
                        https://c15.patreon.com/Patreon_website_Module2_2x_wide_72dpi_0000s_0011_Layer_0_b75b7499a5.jpg           3840w
                      " style="background-color: #23241f" sizes="(min-aspect-ratio: 3840/2160) 100vw, 177.8vh" />
                        </div>
                    </div>
                    <div class="sc-f21e8154-3 fQPqZY slide-1">
                        <div class="sc-f21e8154-6 jGuHxB">
                            <img src="../../c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0007_Background_58eee5a13d.jpg" alt="Straight Up Sisters image" width="3840" height="2160" loading="lazy" decoding="async" srcset="
                        https://c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0007_Background_58eee5a13d.jpg  245w,
                        https://c15.patreon.com/small_Patreon_website_Module2_2x_wide_72dpi_0000s_0007_Background_58eee5a13d.jpg      500w,
                        https://c15.patreon.com/medium_Patreon_website_Module2_2x_wide_72dpi_0000s_0007_Background_58eee5a13d.jpg     750w,
                        https://c15.patreon.com/large_Patreon_website_Module2_2x_wide_72dpi_0000s_0007_Background_58eee5a13d.jpg     1000w,
                        https://c15.patreon.com/Patreon_website_Module2_2x_wide_72dpi_0000s_0007_Background_58eee5a13d.jpg           3840w
                      " style="background-color: #6e5541" sizes="(min-aspect-ratio: 3840/2160) 100vw, 177.8vh" />
                        </div>
                    </div>
                    <div class="sc-f21e8154-3 fQPqZY slide-2">
                        <div class="sc-f21e8154-6 jGuHxB">
                            <img src="https://img.freepik.com/free-photo/nightlife-celebration-multi-colored-bar-establishment-generative-ai_188544-12375.jpg" />
                        </div>
                    </div>
                    <div class="sc-f21e8154-3 fQPqZY slide-3">
                        <div class="sc-f21e8154-6 jGuHxB">
                            <img src="../../c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0024_Background_copy_5_93185ec1a1.jpg" alt="The Royals of Malibu image" width="3840" height="2160" loading="lazy" decoding="async" srcset="
                        https://c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0024_Background_copy_5_93185ec1a1.jpg  245w,
                        https://c15.patreon.com/small_Patreon_website_Module2_2x_wide_72dpi_0024_Background_copy_5_93185ec1a1.jpg      500w,
                        https://c15.patreon.com/medium_Patreon_website_Module2_2x_wide_72dpi_0024_Background_copy_5_93185ec1a1.jpg     750w,
                        https://c15.patreon.com/large_Patreon_website_Module2_2x_wide_72dpi_0024_Background_copy_5_93185ec1a1.jpg     1000w,
                        https://c15.patreon.com/Patreon_website_Module2_2x_wide_72dpi_0024_Background_copy_5_93185ec1a1.jpg           3840w
                      " style="background-color: #b9b2a5" sizes="(min-aspect-ratio: 3840/2160) 100vw, 177.8vh" />
                        </div>
                    </div>
                    <div class="sc-f21e8154-3 fQPqZY slide-4">
                        <div class="sc-f21e8154-6 jGuHxB">
                            <img src="../../c15.patreon.com/thumbnail_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg" alt="The Girls Bathroom" width="3096" height="4128" loading="lazy" decoding="async" srcset="
                        https://c15.patreon.com/thumbnail_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg  117w,
                        https://c15.patreon.com/xsmall_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg     288w,
                        https://c15.patreon.com/small_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg      375w,
                        https://c15.patreon.com/medium_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg     563w,
                        https://c15.patreon.com/large_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg      750w,
                        https://c15.patreon.com/wxgaplus_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg  1080w,
                        https://c15.patreon.com/fhd_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg       1440w,
                        https://c15.patreon.com/qhd_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg       1920w,
                        https://c15.patreon.com/quxga_Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg     2400w,
                        https://c15.patreon.com/Q746_MBA_DSF_8319_FNL_f1be3bcdac.jpg           3096w
                      " style="background-color: #312722" sizes="(min-aspect-ratio: 3096/4128) 100vw, 133.3vh" />
                        </div>
                    </div>
                    <div class="sc-f21e8154-3 fQPqZY slide-5">
                        <div class="sc-f21e8154-6 jGuHxB">
                            <img src="../../c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0006_Layer_0_d3ba3a22a4.jpg" alt="Rabia and Ellyn image" width="3840" height="2160" loading="lazy" decoding="async" srcset="
                        https://c15.patreon.com/thumbnail_Patreon_website_Module2_2x_wide_72dpi_0000s_0006_Layer_0_d3ba3a22a4.jpg  245w,
                        https://c15.patreon.com/small_Patreon_website_Module2_2x_wide_72dpi_0000s_0006_Layer_0_d3ba3a22a4.jpg      500w,
                        https://c15.patreon.com/medium_Patreon_website_Module2_2x_wide_72dpi_0000s_0006_Layer_0_d3ba3a22a4.jpg     750w,
                        https://c15.patreon.com/large_Patreon_website_Module2_2x_wide_72dpi_0000s_0006_Layer_0_d3ba3a22a4.jpg     1000w,
                        https://c15.patreon.com/Patreon_website_Module2_2x_wide_72dpi_0000s_0006_Layer_0_d3ba3a22a4.jpg           3840w
                      " style="background-color: #d3d0c6" sizes="(min-aspect-ratio: 3840/2160) 100vw, 177.8vh" />
                        </div>
                    </div>
                </div>
                <div class="top">
                    <h4 class="sc-d9f24904-0 csqSIz sc-733803e9-0 kfSQeG">
                        <span>Other Cafes on Patreonpass</span>
                    </h4>
                </div>
                <div class="carousel">
                    <div class="sc-f21e8154-4 fFxx titles">
                        <h2 class="sc-d9f24904-0 iRNDkk sc-f21e8154-5 uHnoO">
                            <span class="title-0"><a href="https://www.patreon.com/2blackgirls1rose" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">2 Black Girls,
                                    1 Rose</a></span>
                        </h2>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-f21e8154-5 uHnoO">
                            <span class="title-1"><a href="https://www.patreon.com/straightupsisters" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">Straight Up
                                    Sisters</a></span>
                        </h2>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-f21e8154-5 uHnoO">
                            <span class="title-2"><a href="https://www.patreon.com/chelseadevantez" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">Chelsea
                                    Devantez</a></span>
                        </h2>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-f21e8154-5 uHnoO">
                            <span class="title-3"><a href="https://www.patreon.com/TheRoyalsofMalibu" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">The Royals of
                                    Malibu</a></span>
                        </h2>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-f21e8154-5 uHnoO">
                            <span class="title-4"><a href="https://www.patreon.com/TheGirlsBathroom" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">The Girls
                                    Bathroom</a></span>
                        </h2>
                        <h2 class="sc-d9f24904-0 iRNDkk sc-f21e8154-5 uHnoO">
                            <span class="title-5"><a href="https://www.patreon.com/rabiaandellyn" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">Rabia and
                                    Ellyn</a></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc-fc3e0d65-0 izRDca marketing.get-started-2" data-theme="dark" id="Get_Start">
        <div class="container-inner">
            <div class="sc-3de513f2-0 kXgRDu">
                <div class="video">
                    <img src="https://img.freepik.com/free-photo/nightlife-celebration-multi-colored-bar-establishment-generative-ai_188544-12375.jpg" />
                </div>
                <div class="sc-3de513f2-2 jwzgby">
                    <img class="logomark" alt="" src="https://c5.patreon.com/external/marketing/new_marketing_pages/logomark-animated.webp" width="120" height="120" />
                    <div class="text-editor">
                        <div class="sc-f087927f-0 hzuLcl block">
                            <h4 class="sc-d9f24904-0 csqSIz sc-6e48539f-0 exGBeR text-center heading">
                                Your world to create
                            </h4>
                            <div class="sc-42b34c08-0 hZMjsW">
                                <a href="https://patronpass.bar/signup" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC sc-5de05abd-0 heSnOH primary button strapi-link">
                                    <div data-label="Get started" class="label-wrapper">
                                        <span class="label">Get started</span>
                                    </div>
                                </a>
                            </div>
                            <p class="sc-e6679e59-0 fWJJtW text-center text-base">
                                Already have an account?
                                <a href="https://patreon.com/login" target="_blank" rel="noopener noreferrer" class="sc-f2282c81-0 hbWhaC strapi-link">Log
                                    in</a>
                            </p>
                        </div>
                    </div>
                    <div class="app-store">
                        <a href="https://patronpass.bar/" class="app-store-button" target="_blank" rel="noopener noreferrer" title="Get it on Google Play"><img src="{{ asset('img') }}/play.png" width="256" height="76" alt="Get it on Google Play" /></a><a href="https://patronpass.bar/" class="app-store-button" target="_blank" rel="noopener noreferrer" title="Download on the App Store"><img src="{{ asset('img') }}/apple.png" width="256" height="76" alt="Download on the App Store" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
