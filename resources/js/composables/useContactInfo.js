/**
 * Composable for managing contact information
 * Uses environment variables with fallback values
 */
export function useContactInfo() {
  // Phone numbers
  const phoneNumber = import.meta.env.VITE_PHONE_NUMBER || '+48 123 456 789'
  const phoneNumberFormatted = import.meta.env.VITE_PHONE_NUMBER_FORMATTED || '+48 123 456 789'
  
  // Email addresses
  const emailContact = import.meta.env.VITE_EMAIL_CONTACT || 'info@bakster.pl'
  const emailBooking = import.meta.env.VITE_EMAIL_BOOKING || 'kontakt@bakster.pl'
  
  // Helper functions
  const getPhoneHref = () => `tel:${phoneNumber.replace(/\s/g, '')}`
  const getEmailHref = (email = emailContact) => `mailto:${email}`
  
  return {
    // Raw values
    phoneNumber,
    phoneNumberFormatted,
    emailContact,
    emailBooking,
    
    // Helper functions
    getPhoneHref,
    getEmailHref
  }
}
