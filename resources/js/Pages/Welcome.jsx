import { useState } from 'react';
import Navbar from '@/Components/Navbar';
import { Link, Head } from '@inertiajs/react';
import ApplicationLogo from '@/Components/ApplicationLogo';


export default function Welcome({ auth, laravelVersion, phpVersion }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
    
    return (
        <>
            <Head title="Welcome" />
            <Navbar/>
        </>
    );
}
