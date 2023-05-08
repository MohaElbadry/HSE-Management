import React from "react";
import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
import Home from "./screens/Home";
import Doc_Login from "./screens/Doc_Login";
import Pat_Home_Screen from "./screens/Pat_Home_Screen";

const config = {
    animation: "spring",
    config: {
        stiffness: 1000,
        damping: 500,
        mass: 3,
        overshootClamping: true,
        restDisplacementThreshold: 0.01,
        restSpeedThreshold: 0.01,
    },
};

export default function App() {
    const Stack = createNativeStackNavigator();
    return (
        <NavigationContainer>
            <Stack.Navigator
                initialRouteName="Home"
                screenOptions={{ headerShown: false }}
            >
                <Stack.Screen name="Home" component={Home} />
                <Stack.Screen name="Doc_Login" component={Doc_Login} />
                <Stack.Screen name="Doc_Login" component={Pat_Home_Screen} />
            </Stack.Navigator>
        </NavigationContainer>
    );
}
