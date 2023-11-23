import Navbar from '@/Components/Navbar';
import { Head } from '@inertiajs/react';
import React from 'react';

export default function Welcome(props) {
    return (
        <>
            <Head title="Welcome" />
            <Navbar user={props.auth.user} />
        </>
    );
}