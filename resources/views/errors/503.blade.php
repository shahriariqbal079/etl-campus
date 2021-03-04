<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            background: #262b30;
            height: 100%;
        }

        body {
            overflow: visible;
            text-align: center;
        }

        .error-page {
            padding: 60px 0 20px;
            display: inline-block;
            font-family: Helvetica-neue, Helvetica, Arial, sans-serif;
            color: #788392;
        }

        .error-page svg {
            position: relative;
            overflow: visible;
            z-index: 2;
            transform: translate3d(0, 0, 0);
            margin: 3em;
        }

        .error-page .error-message {
            margin: 1em 0;
            position: relative;
            transform: translate3d(0, 0, 0);
            z-index: 2;
        }

        .error-page h1 {
            font-size: 50px;
            font-weight: normal;
            margin: 0;
            -webkit-animation: 1.5s ease-out fade-in-slowly;
            animation: 1.5s ease-out fade-in-slowly;
        }

        .error-page p {
            font-size: 20px;
            margin: 10px 0;
            -webkit-animation: 2s ease-out fade-in-slowly;
            animation: 2s ease-out fade-in-slowly;
        }

        .error-page a {
            color: #535e69;
            text-decoration: none;
        }

        .error-page a:hover {
            text-decoration: underline;
        }

        .error-page a+a:before {
            content: "";
            position: relative;
            top: -0.3em;
            width: 10px;
            margin: 0 15px;
            border-top: 1px solid #535e69;
            display: inline-block;
        }

        .error-page:hover h1,
        .error-page:hover p {
            font-size: 0;
        }

        .error-page:hover h1:before,
        .error-page:hover p:before {
            content: attr(data-alt-message);
        }

        .error-page:hover h1:before {
            font-size: 50px;
        }

        .error-page:hover p:before {
            font-size: 20px;
        }

        [id$=cube-1],
        [id$=cube-13],
        [id$=cube-25] {
            -webkit-animation: drop-cube-1 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-1 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-1] path,
        [id$=cube-13] path,
        [id$=cube-25] path {
            -webkit-animation: fade-cube-1 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-1 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-2],
        [id$=cube-14],
        [id$=cube-26] {
            -webkit-animation: drop-cube-2 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-2 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-2] path,
        [id$=cube-14] path,
        [id$=cube-26] path {
            -webkit-animation: fade-cube-2 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-2 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-3],
        [id$=cube-15],
        [id$=cube-27] {
            -webkit-animation: drop-cube-3 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-3 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-3] path,
        [id$=cube-15] path,
        [id$=cube-27] path {
            -webkit-animation: fade-cube-3 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-3 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-4],
        [id$=cube-16],
        [id$=cube-28] {
            -webkit-animation: drop-cube-4 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-4 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-4] path,
        [id$=cube-16] path,
        [id$=cube-28] path {
            -webkit-animation: fade-cube-4 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-4 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-5],
        [id$=cube-17],
        [id$=cube-29] {
            -webkit-animation: drop-cube-5 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-5 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-5] path,
        [id$=cube-17] path,
        [id$=cube-29] path {
            -webkit-animation: fade-cube-5 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-5 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-6],
        [id$=cube-18],
        [id$=cube-30] {
            -webkit-animation: drop-cube-6 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-6 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-6] path,
        [id$=cube-18] path,
        [id$=cube-30] path {
            -webkit-animation: fade-cube-6 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-6 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-7],
        [id$=cube-19],
        [id$=cube-31] {
            -webkit-animation: drop-cube-7 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-7 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-7] path,
        [id$=cube-19] path,
        [id$=cube-31] path {
            -webkit-animation: fade-cube-7 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-7 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-8],
        [id$=cube-20],
        [id$=cube-32] {
            -webkit-animation: drop-cube-8 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-8 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-8] path,
        [id$=cube-20] path,
        [id$=cube-32] path {
            -webkit-animation: fade-cube-8 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-8 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-9],
        [id$=cube-21],
        [id$=cube-33] {
            -webkit-animation: drop-cube-9 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-9 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-9] path,
        [id$=cube-21] path,
        [id$=cube-33] path {
            -webkit-animation: fade-cube-9 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-9 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-10],
        [id$=cube-22],
        [id$=cube-34] {
            -webkit-animation: drop-cube-10 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-10 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-10] path,
        [id$=cube-22] path,
        [id$=cube-34] path {
            -webkit-animation: fade-cube-10 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-10 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-11],
        [id$=cube-23],
        [id$=cube-35] {
            -webkit-animation: drop-cube-11 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-11 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-11] path,
        [id$=cube-23] path,
        [id$=cube-35] path {
            -webkit-animation: fade-cube-11 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-11 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-12],
        [id$=cube-24],
        [id$=cube-36] {
            -webkit-animation: drop-cube-12 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: drop-cube-12 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        [id$=cube-12] path,
        [id$=cube-24] path,
        [id$=cube-36] path {
            -webkit-animation: fade-cube-12 0.9s cubic-bezier(0.19, 1, 0.32, 1);
            animation: fade-cube-12 0.9s cubic-bezier(0.19, 1, 0.32, 1);
        }

        .reverse-stack:hover h1:before {
            font-size: 20px;
            position: relative;
            top: 10px;
        }

        .reverse-stack:hover p:before {
            font-size: 50px;
        }

        .csi {
            overflow: hidden;
            position: relative;
            display: block;
            height: 1.5em;
        }

        .csi span {
            display: block;
            text-align: center;
            line-height: 1.5em;
        }

        .error-page.error-503:hover p {
            margin: 0;
        }

        .error-page.error-503:hover h1:after {
            content: "YEEEEEAAAAAAAAAHHHHHH!!!!!";
            display: block;
            font-size: 16px;
            position: absolute;
            top: 120%;
            width: 100%;
            text-align: center;
            -webkit-animation: 7s ease-out fade-in-slowly;
            animation: 7s ease-out fade-in-slowly;
        }

        .error-page.error-503:hover .csi {
            -webkit-animation: 1s ease-out fade-in-slowly;
            animation: 1s ease-out fade-in-slowly;
            font-size: 50px;
            top: 15px;
        }

        .error-page.error-503:hover .csi span {
            font-size: 50px;
            transform: translateY(-4.5em);
            -webkit-animation: csi 6s steps(5, end);
            animation: csi 6s steps(5, end);
        }

        .error-page.error-503:hover .csi span:first-child {
            display: none;
        }

        @-webkit-keyframes drop-cube-1 {

            0%,
            7% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-1 {

            0%,
            7% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-1 {

            0%,
            7% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-1 {

            0%,
            7% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-2 {

            0%,
            14% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-2 {

            0%,
            14% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-2 {

            0%,
            14% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-2 {

            0%,
            14% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-3 {

            0%,
            21% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-3 {

            0%,
            21% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-3 {

            0%,
            21% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-3 {

            0%,
            21% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-4 {

            0%,
            28% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-4 {

            0%,
            28% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-4 {

            0%,
            28% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-4 {

            0%,
            28% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-5 {

            0%,
            35% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-5 {

            0%,
            35% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-5 {

            0%,
            35% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-5 {

            0%,
            35% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-6 {

            0%,
            42% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-6 {

            0%,
            42% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-6 {

            0%,
            42% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-6 {

            0%,
            42% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-7 {

            0%,
            49% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-7 {

            0%,
            49% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-7 {

            0%,
            49% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-7 {

            0%,
            49% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-8 {

            0%,
            56% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-8 {

            0%,
            56% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-8 {

            0%,
            56% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-8 {

            0%,
            56% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-9 {

            0%,
            63% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-9 {

            0%,
            63% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-9 {

            0%,
            63% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-9 {

            0%,
            63% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-10 {

            0%,
            70% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-10 {

            0%,
            70% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-10 {

            0%,
            70% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-10 {

            0%,
            70% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-11 {

            0%,
            77% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-11 {

            0%,
            77% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-11 {

            0%,
            77% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-11 {

            0%,
            77% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes drop-cube-12 {

            0%,
            84% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes drop-cube-12 {

            0%,
            84% {
                transform: translateY(200px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fade-cube-12 {

            0%,
            84% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-cube-12 {

            0%,
            84% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fade-in-slowly {
            0% {
                opacity: 0;
            }

            80% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fade-in-slowly {
            0% {
                opacity: 0;
            }

            80% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes csi {
            0% {
                transform: translateY(1.5em);
            }

            100% {
                transform: translateY(-6em);
            }
        }

        @keyframes csi {
            0% {
                transform: translateY(1.5em);
            }

            100% {
                transform: translateY(-6em);
            }
        }

    </style>


</head>

<body>

    <div class='error-page error-503 reverse-stack'>
        <svg xmlns="http://www.w3.org/2000/svg" width="312">
            <g id="503-cube-1">
                <path fill="#1D2125" d="M211 0l-20 11.2v22.4l20 11.2 20-11.2V11.2L211 0z" />
                <path fill="#DADEDE" d="M211 5.3l-15.3 8.5 15.3 8.6 15.3-8.6L211 5.3" />
            </g>
            <g id="503-cube-2">
                <path fill="#1D2125" d="M191 11.2l-20 11.2v22.4L191 56l20-11.2V22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M191 16.5L175.7 25l15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-3">
                <path fill="#1D2125" d="M171 22.4l-20 11.2V56l20 11.2L191 56V33.6l-20-11.2z" />
                <path fill="#DADEDE" d="M171 27.7l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-4">
                <path fill="#1D2125" d="M230.9 11.2l-20 11.2v22.4l20 11.2 20-11.2V22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M230.9 16.4L215.6 25l15.3 8.6 15.3-8.6-15.3-8.6" />
            </g>
            <g id="503-cube-5">
                <path fill="#1D2125" d="M251 22.4l-20 11.2V56l20 11.2L271 56V33.6l-20-11.2z" />
                <path fill="#DADEDE" d="M251 27.7l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-6">
                <path fill="#1D2125" d="M231.1 33.7l-20 11.2v22.4l20 11.2 20-11.2V44.9l-20-11.2z" />
                <path fill="#DADEDE" d="M231.1 38.9l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-7">
                <path fill="#1D2125" d="M271 33.7l-20 11.2v22.4l20 11.2 20-11.2V44.9l-20-11.2z" />
                <path fill="#DADEDE" d="M271 38.9l-15.3 8.5L271 56l15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-8">
                <path fill="#1D2125" d="M211 44.8L191 56v22.4l20 11.2 20-11.2V56l-20-11.2z" />
                <path fill="#DADEDE" d="M211 50.1l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-9">
                <path fill="#1D2125" d="M290.9 44.8l-20 11.2v22.4l20 11.2 20-11.2V56l-20-11.2z" />
                <path fill="#DADEDE" d="M290.9 50.1l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-10">
                <path fill="#1D2125" d="M270.9 56.1l-20 11.2v22.4l20 11.2 20-11.2V67.3l-20-11.2z" />
                <path fill="#DADEDE" d="M270.9 61.3l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-11">
                <path fill="#1D2125" d="M251 67.2l-20 11.2v22.4l20 11.2 20-11.2V78.4l-20-11.2z" />
                <path fill="#DADEDE" d="M251 72.5L235.7 81l15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-13">
                <path fill="#1D2125" d="M135.6 42.3l-20 11.2v22.3l20 11.2 20-11.2V53.5l-20-11.2z" />
                <path fill="#DADEDE" d="M135.6 47.5L120.3 56l15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-14">
                <path fill="#1D2125" d="M115.6 53.5l-20 11.2v22.4l20 11.2 20-11.2V64.7l-20-11.2z" />
                <path fill="#DADEDE" d="M115.6 58.7l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-15">
                <path fill="#1D2125" d="M95.6 64.7l-20 11.2v22.4l20 11.2 20-11.2V75.9l-20-11.2z" />
                <path fill="#DADEDE" d="M95.6 69.9l-15.3 8.5L95.6 87l15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-16">
                <path fill="#1D2125" d="M115.6 75.9l-20 11.2v22.4l20 11.2 20-11.2V87.1l-20-11.2z" />
                <path fill="#DADEDE" d="M115.6 81.1l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-17">
                <path fill="#1D2125" d="M155.5 53.4l-20 11.2V87l20 11.2 20-11.2V64.7l-20-11.3z" />
                <path fill="#DADEDE" d="M155.5 58.7l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-18">
                <path fill="#1D2125" d="M175.5 64.7l-20 11.2v22.4l20 11.2 20-11.2V75.9l-20-11.2z" />
                <path fill="#DADEDE" d="M175.5 69.9l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-19">
                <path fill="#1D2125" d="M195.6 75.9l-20 11.2v22.4l20 11.2 20-11.2V87.1l-20-11.2z" />
                <path fill="#DADEDE" d="M195.6 81.2l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-20">
                <path fill="#1D2125" d="M135.6 87.1l-20 11.2v22.4l20 11.2 20-11.2V98.3l-20-11.2z" />
                <path fill="#DADEDE" d="M135.6 92.3l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-21">
                <path fill="#1D2125" d="M155.6 98.3l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M155.6 103.5l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-22">
                <path fill="#1D2125" d="M215.5 87.1l-20 11.2v22.4l20 11.2 20-11.2V98.3l-20-11.2z" />
                <path fill="#DADEDE" d="M215.5 92.3l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-23">
                <path fill="#1D2125" d="M195.5 98.3l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M195.5 103.6l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-24">
                <path fill="#1D2125" d="M175.6 109.4l-20 11.2V143l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M175.6 114.7l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-26">
                <path fill="#1D2125" d="M60.1 84.4l-20 11.2V118l20 11.2 20-11.2V95.6l-20-11.2z" />
                <path fill="#DADEDE" d="M60.1 89.6l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-27">
                <path fill="#1D2125" d="M40.1 95.6l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M40.1 100.8l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-28">
                <path fill="#1D2125" d="M20 106.8L0 118v22.4l20 11.2 20-11.2V118l-20-11.2z" />
                <path fill="#DADEDE" d="M20 112l-15.3 8.6 15.3 8.6 15.3-8.6L20 112" />
            </g>
            <g id="503-cube-29">
                <path fill="#1D2125" d="M40.1 118l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M40.1 123.2l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-30">
                <path fill="#1D2125" d="M100 106.8L80 118v22.4l20 11.2 20-11.2V118l-20-11.2z" />
                <path fill="#DADEDE" d="M100 112l-15.3 8.6 15.3 8.6 15.3-8.6L100 112" />
            </g>
            <g id="503-cube-31">
                <path fill="#1D2125" d="M80.1 118l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M80.1 123.3l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-32">
                <path fill="#1D2125" d="M120 118l-20 11.2v22.4l20 11.2 20-11.2v-22.4L120 118z" />
                <path fill="#DADEDE" d="M120 123.3l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-33">
                <path fill="#1D2125" d="M60.1 129.2l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M60.1 134.4l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-34">
                <path fill="#1D2125" d="M140 129.2l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M140 134.4l-15.3 8.5 15.3 8.7 15.3-8.6-15.3-8.6" />
            </g>
            <g id="503-cube-35">
                <path fill="#1D2125" d="M119.9 140.4l-20 11.2V174l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M119.9 145.7l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
            <g id="503-cube-36">
                <path fill="#1D2125" d="M100.1 151.6l-20 11.2v22.4l20 11.2 20-11.2v-22.4l-20-11.2z" />
                <path fill="#DADEDE" d="M100.1 156.8l-15.3 8.5 15.3 8.6 15.3-8.6-15.3-8.5" />
            </g>
        </svg>
        <div class='error-message'>
            <h1 data-alt-message="Please, pardon us while we…"><span>Service Unavailable</span></h1>
            <p>
                <span class='csi'>
                    <span>But don't worry, this shouldn't affect your databases.</span>
                    <span>(•_•)</span>
                    <span>( •_•)>⌐■-■</span>
                    <span>(⌐■_■)</span>
                    <span>Compose Ourselves</span>
                </span>
            </p>
        </div>
    </div>
</body>

</html>
