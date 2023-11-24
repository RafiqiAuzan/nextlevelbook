import Navbar from '@/Components/Navbar';
import { Head } from '@inertiajs/react';
import React from 'react';

export default function Welcome(props) {
    return (
        <>
        
        <Navbar user={props.auth.user} />
        <div className='bg-[#F6F4EB] min-h-screen '>
            <div className='container mx-auto '>
            <Head title="Welcome" />
            </div>
            </div>
        </>
    );
}